<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suppliers' Database</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .img-container {
            height: 100vh;
        }

        .img-fluid {
            float: left;
            height: 100%;
        }

        .container {
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto;
        }

        .logo-container {
            position: absolute;
            top: 0;
            left: 0; /* Position the logo container to the right */
            width: auto;
            height: 100%;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            max-width: 200px; /* Adjust logo size as needed */
            width: auto;
            max-height: 80vh; /* Limit the logo's height */
            margin-left: 50px;
            margin-bottom: 100px;
        }


    </style>
</head>
<body>
    <div class="img-container">
        <div class="logo-container">
            <img src="{{ asset('storage/Main Login Page - Logo.png') }}" class="logo" alt="Logo">
        </div>
        <img src="{{ asset('storage/create - BG.png') }}" class="img-fluid" alt="Image">

        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
