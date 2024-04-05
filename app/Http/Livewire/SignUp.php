<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SignUp extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $email;
    public $phone;
    public $password;
    public $Photo;

    protected $rules = [
        'name' => 'required',
        'position' => 'required',
        'email' => 'required|email|unique:users',
        'phone' =>'required',
        'password' => 'required|min:6',
        'Photo' => 'image|max:1024', // Adjust the rules as needed
    ];

    public function updatedPhoto()
    {
        $this->validateOnly('Photo');
    }

    public function signUp()
    {
        $this->validate();

        $user = User::create([
            'Photo' => $this->Photo,
            'name' => $this->name,
            'position' => $this->position,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ]);

        if ($this->Photo) {
            $path = $this->Photo->store('profile-photos', 'public');
            $user->update(['profile_photo_path' => $path]);
        }

        session()->flash('success', 'Account created successfully');

        // Redirect the user to the sign-in page after successful sign-up
        return Redirect::to('/signin');
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}