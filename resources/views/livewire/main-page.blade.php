<x-layouts.app>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #D6D7D8f0;
            overflow: hidden; /* Prevent scrolling */
        }

        .full-background {
            background-image: url('{{ asset('storage/Main Login Page - BG.png') }}');
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        </head>
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.btn');

            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    this.style.backgroundColor = "#0056b3"; // Change the color to a darker shade on click

                    // Reset the color after a short delay
                    setTimeout(() => {
                        this.style.backgroundColor = "#007bff";
                    }, 200);
                });
            });
        });
    </script>

    <div class="full-background">
        <div style="background-color: rgba(255, 255, 255, 0.8); padding: 40px; border-radius: 10px; position: relative; text-align: center; width: 400px;">
            <!-- Logo -->
            <img src="{{ asset('storage/Main Login Page - Logo.png') }}" alt="Logo" style="width: 150px; height: 150px; margin-bottom: 20px;">

            <!-- Title -->
            <img src="{{ asset('storage/PAMANTASAN NG LUNGSOD NG MAYNILA - Text.png') }}" alt="Title" style="width: 70%; margin-top: 20px;">

            <!-- Title2 -->
            <img src="{{ asset('storage/Logo of PLM for Login pages of proc office, end-users, and cur supps.png') }}" alt="Title2" style="width: 70%; margin-top: -5px; margin-bottom: 10px; margin-right: -70px; opacity: 0.9;">

            <!-- Line -->
            <hr style="margin-top: -20px; border: 1px solid #000; width: 90%;">

            <!-- Small Text -->
            <p style="font-size: 14px; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);">Select an account of whom you wish to log in as.</p>

            <!-- Login Buttons -->
            <div class="blue-button-container" style="margin-top: 10px;">
                <button wire:click="navigateToSignIn" class="btn btn-primary" style="background-color: #007bff; color: white; padding: 15px 34px; border-radius: 30px; margin-bottom: 20px; margin-top: 20px; font-weight: bold; border: none;">Procurement Office</button><br>
                <button wire:click="navigateToSignIn" class="btn btn-primary" style="background-color: #007bff; color: white; padding: 15px 65px; border-radius: 30px; margin-bottom: 20px; font-weight: bold; border: none;">End-user</button><br>
            </div>
        </div>
    </div>
</x-layouts.app>
