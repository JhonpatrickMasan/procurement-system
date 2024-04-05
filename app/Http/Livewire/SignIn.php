<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Kreait\Firebase\Auth as FirebaseAuth;
use Illuminate\Support\Facades\Auth;

class SignIn extends Component
{
    public $showOTPForm = false;
    public $email;
    public $password;
    public $phoneNumber;
    public $verificationCode;

    public function signIn()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
            'phoneNumber' => 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $this->reset(['email', 'password']);

            // Dispatch a custom Livewire event
            $this->dispatch('userLoggedIn');

            // Redirect to the dashboard
            return redirect()->to('/dashboard');
        } else {
            $this->addError('email', 'Invalid credentials');
        }
    }

    public function sendOTP()
    {
        dd('sendOTP method called');
        $this->validate([
            'phoneNumber' => 'required',
        ]);

        $auth = app(FirebaseAuth::class);

        // Send OTP to the provided phone number
        $verificationId = $auth->startPhoneNumberVerification('+' . $this->phoneNumber, [
            'recaptchaToken' => request('recaptchaToken'),
        ]);

        // Save verification ID to the session for later use
        session(['verificationId' => $verificationId]);

        // Switch to OTP verification step
        $this->emit('showOTPForm');
    }

    public function verifyOTP()
    {
        $this->validate([
            'verificationCode' => 'required',
        ]);

        $auth = app(FirebaseAuth::class);

        // Verify OTP
        $verificationId = session('verificationId');
        $auth->checkPhoneNumberVerification('+' . $this->phoneNumber, $verificationId, $this->verificationCode);

        // Additional logic after successful verification

        // For example, redirect to the dashboard
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.sign-in');
    }

    public function navigateToSignUp()
    {
        return redirect()->route('signup');
    }

    public function redirectToMainPage()
    {
        return redirect('/');
    }

    public function redirectToDashboard()
    {
        return redirect('/dashboard');
    }
}