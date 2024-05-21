<x-layouts.app>

    <head>
        <style>
            body,
            html {
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
                background-color: #D6D7D8f0;
                overflow: hidden;
                /* Prevent scrolling */
            }

            .full-background {
                background: linear-gradient(to right, #2D349A 25%, transparent 25%), url('{{ asset('storage/Main Login Page - BG.png') }}');
                background-size: 100% 100%;
                background-attachment: fixed;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                /* Updated to move content to the left */
                padding: 20px;
            }

            .login-form {
                background-color: rgba(255, 255, 255);
                padding: 60px;
                /* Adjustable padding */
                border-radius: 10px;
                width: 300px;
                text-align: center;
                margin-left: 25px;
                /* Move to the right side */
                margin-right: 140px;
                /* Adjust margin as needed */
                margin-bottom: 50px;
            }

            .logo {
                margin-bottom: 10px;
                margin-left: -35px;
                margin-right: auto;
                margin-top: -30px;
            }

            .header-text {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: -10px;
                text-align: left;
                color: #2D349A;
            }

            h2 {
                font-size: 18px;
                /* Adjusted font size for Sign In text */
                margin-bottom: 20px;
                text-align: left;
                color: #2D349A;
            }

            /* Style for the checkbox */
            .checkbox-container {
                display: flex;
                align-items: center;
                margin-top: 10px;
            }

            input[type="checkbox"] {
                margin-right: 5px;
            }

            .login-button,
            .signup-button,
            .return-button {
                font-weight: bold;
            }

            .login-button {
                background-color: #2D349A;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 8px;
                /* Make it rounder */
                cursor: pointer;
                width: 100%;
                margin-top: 10px;
            }

            .signup-button {
                background-color: #E4E7EB;
                color: black;
                padding: 10px;
                border: none;
                border-radius: 8px;
                /* Make it rounder */
                cursor: pointer;
                width: 100%;
                margin-top: 10px;
            }

            .return-button {
                background-color: #C9AE5D;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 8px;
                /* Make it rounder */
                cursor: pointer;
                width: 100%;
                margin-top: 10px;
            }

            /* Style for the separator lines and "or sign in with" text */
            .separator-lines {
                display: flex;
                align-items: center;
                margin-top: 20px;
            }

            .separator-line {
                flex: 1;
                height: 1px;
                background-color: #ddd;
                /* Adjust separator line color */
                margin: 0 10px;
            }

            .or-text {
                font-size: 14px;
                color: rgba(85, 85, 85, 0.7);
                /* Adjust text color and opacity */
            }

            /* Style for bottom margin on labels */
            label {
                margin-bottom: 5px;
                /* You can adjust this value */
            }

            /* Style for the forgot password link */
            .forgot-password {
                font-size: 12px;
                color: #008CBA;
                cursor: pointer;
                margin-left: 5px;
                /* Adjust margin as needed */
                text-decoration: none;
                /* Remove underline */
            }

            /* Style for thicker and rounder input fields */
            input[type="email"],
            input[type="password"],
            input[type="text"] {
                padding: 12px;
                /* Increase padding for thickness */
                border: 1px solid #ddd;
                /* Add border for thickness */
                border-radius: 8px;
                /* Make it rounder */
                width: 100%;
                box-sizing: border-box;
            }
        </style>
    </head>

    <div class="full-background">
        <div class="login-form">
            <div class="logo">
                <img src="{{ asset('storage/Top Navbar PLM.png') }}" alt="Logo" style="width: 350px; height: auto;">
            </div>

            <div class="header-text">Procurement Office</div>
            <h2>Sign In</h2>

            @if (session('error'))
                <p>{{ session('error') }}</p>
            @endif

            <form wire:submit.prevent="signIn" style="text-align: left;">
                <div style="margin-bottom: 15px;">
                    <label for="email">Email Address</label>
                    <input type="email" wire:model="email" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="password" style="display: flex; align-items: center;">Password
                        <span class="forgot-password" style="margin-left: 120px;"
                            wire:click="redirectToForgotPassword">Forgot Password?</span>
                    </label>
                    <input type="password" wire:model="password" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" wire:model="keepSignedIn">
                    <label for="keepSignedIn">Keep me signed in</label>
                </div>

                <button type="submit" class="login-button" wire:loading.attr="disabled" wire:target="signIn">Sign
                    in</button>
            </form>

            <div class="separator-lines">
                <div class="separator-line"></div>
                <div class="or-text">or sign in with</div>
                <div class="separator-line"></div>
            </div>

            <button wire:click="navigateToSignUp" class="signup-button">Sign Up</button>

            <div class="separator-lines">
                <div class="separator-line"></div>
                <div class="or-text">or return to the main page</div>
                <div class="separator-line"></div>
            </div>

            <button wire:click="redirectToMainPage" class="return-button">Return</button>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                // Your existing Livewire scripts, make sure not to remove anything outside this script tag
            });
        </script>
    @endpush
</x-layouts.app>
