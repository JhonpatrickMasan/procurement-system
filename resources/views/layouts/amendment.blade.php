<x-layouts.app>

    <head>
        <livewire:styles />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            body,
            html {
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
                background-color: #D6D7D8f0;
                overflow-y: auto;
                /* Prevent scrolling */
            }

            #menu {
                position: absolute;
                /* Change position to absolute */
                background-color: #2D349A;
                color: #fff;
                padding: 40px;
                text-align: left;
                width: 240px;
                height: 1100px;
                overflow-y: auto;
                z-index: 500;
                top: 102px;
                /* Position menu at the top of the viewport */
                left: 0;
                /* Position menu at the left of the viewport */
            }

            #userPhoto {
                width: 100px;
                /* Set the width of the profile photo */
                height: 100px;
                /* Set the height of the profile photo */
                border-radius: 50%;
                /* Make it circular */
                margin-bottom: 10px;
                /* Added margin below the user's position */
                overflow: hidden;
            }

            #userPhoto img {
                width: 100%;
                /* Make the image fill the container */
                height: auto;
                /* Maintain aspect ratio */
            }

            /* Separator added below the user's position */
            #userPositionSeparator {
                content: "";
                height: 2px;
                background: linear-gradient(to right, rgba(255, 255, 255, 0), #fff, rgba(255, 255, 255, 0));
                margin-top: 10px;
                margin-bottom: 10px;
                width: 100%;
            }

            #userName {
                color: #fff;
                font-weight: bold;
                margin-bottom: 10px;
                /* Added margin below the user's name */
            }

            #welcomeText {
                color: #fff;
                margin-bottom: 20px;
                /* Added margin below the welcome text */
            }

            #menu a {
                color: #fff;
                text-decoration: none;
                margin: 15px 0;
                /* Adjusted vertical margin */
                font-size: 16px;
                display: flex;
                align-items: center;
            }

            #menu a i {
                margin-right: 10px;
                /* Added margin to the right of the icon */
            }

            #menu a:hover {
                text-decoration: underline;
            }

            #logout {
                color: #fff;
                text-decoration: none;
                margin-top: auto !important;
                /* Set margin-top to auto */
                font-size: 16px;
                cursor: pointer;
                /* Added cursor style */
            }

            #topNav {
                background-color: #ffffff;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            #logo {
                width: 350px;
                height: auto;
            }

            #additionalPadding {
                margin-top: 30px;
                margin-right: 50px;
                margin-left: 370px;
                padding: 5px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 15px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }


            #content {
                margin-top: 50px;
                margin-right: 50px;
                margin-left: 370px;
                margin-bottom: 50px;
                padding: 120px 50px;
                text-align: center;
                background-color: transparent;
                border-radius: 15px;
                height: 450px;
                display: flex;
                justify-content: space-around;
                /* Distribute columns evenly */
            }

            .col {
                width: 30%;
                background-color: #ffffff;
                border-radius: 15px;
                /* Adjust the width of each column as needed */
            }

            .green-bar {
                height: 20px;
                /* Adjust height of the green bar */
                background-color: green;
                /* Set green color */
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }

            .black-bar {
                height: 20px;

                /* Adjust height of the black bar */
                background-color: black;
                /* Set black color */
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }

            p {
                text-align: center;
                /* Center-align text and icons */
            }

            .button-column {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
                /* Add space between buttons */
            }

            .button-column button {
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                background-color: #007bff;
                /* Button color */
                color: white;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .button-column button:hover {
                background-color: #0056b3;
                /* Button color on hover */
            }
        </style>
    </head>

    <body>
        <div id="menu">
            @auth
                <div id="userPhoto">
                    @if (auth()->user()->profile_photo_path)
                        <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}" alt="Profile Photo">
                    @else
                        <!-- Default profile photo or placeholder image -->
                        <img src="{{ asset('storage/UoAqIOtb87mT4dmcvldVz6GyFtljRv-metaMzc1NDU1MTcxXzE4MDM1MDU3MDAwNTE3MzVfMzQyODU0NzAzNjI2NTM4MDk5MV9uLmpwZw==-.jpg') }}"
                            alt="Profile Photo">
                    @endif
                </div>

                <div id="welcomeText">Welcome!</div>
                <div id="userName">{{ auth()->user()->name }}</div>
                <div id="userPosition">{{ auth()->user()->position }}</div>
                <!-- Separator -->
                <div id="userPositionSeparator"></div>
                <a href="#Dashboard" style="margin-bottom: 40px; margin-top: 40px;"><i class="fas fa-tachometer-alt"></i>
                    Dashboard</a>
                <a href="#Information" style="margin-bottom: 40px;"><i class="fas fa-user"></i> Personal Information</a>
                <a id="#Suppliers' Database" href="{{ route('supplier.table') }}" style="margin-bottom: 40px;"><i
                        class="fas fa-sign-out-alt"></i> Suppliers' Database </a>
                <a id="Monitoring" href="{{ route('monitoring') }}" style="margin-bottom: 40px;"><i
                        class="fas fa-chart-line"></i> Procurement Monitoring</a>
                <a href="#Notifcation" style="margin-bottom: 40px;"><i class="fas fa-bell"></i> Notifications</a>
                <a href="#Template" style="margin-bottom: 200px;"><i class="fas fa-star"></i> Template Hub</a>
                <a id="logout" href="{{ url('/') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            @else
                <p>You are not authenticated.</p>
            @endauth
        </div>

        <div id="topNav">
            <img id="logo" src="{{ asset('storage\Top Navbar PLM.png') }}" alt="Logo">
            <div id="searchBar">
                <img id="searchIcon" src="{{ asset('storage\Search.svg') }}" alt="Search">
                <input type="text" id="searchInput" placeholder="Search here" oninput="toggleSearchIcon()">
            </div>
        </div>

        <div id="additionalPadding">
            <div id="dashboardContent">
                <h2>Suppliers' Database</h2>
            </div>
        </div>

        <div id="additionalPadding">
            <div id="dashboardContent">
                <h2>Information Technology Equipment</h2>
            </div>
        </div>

        <div id="additionalPadding">
            <div id="dashboardContent">
                <h2>Amendment</h2>
            </div>
        </div>

        <div id="content">
            <div class="col">
                <div class="black-bar"></div> <!-- Black bar for the second column -->
                <!-- Add content here -->
                <p style="text-align: center; padding-bottom: 25px; padding-top: 25px;">
                    <strong>Amendment Form Document</strong><br>
                </p>
                <i class="fas fa-file-alt" style="font-size: 100px; padding-top 100px;"></i>
                <div class="button-column" style="padding-top: 50px;">
                    <button>View Document</button>
                    <button>Approve</button>
                    <button>Reject</button>
                </div>
            </div>
        </div>
    </body>
</x-layouts.app>
