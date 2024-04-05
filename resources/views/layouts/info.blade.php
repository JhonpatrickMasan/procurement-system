<x-layouts.app>
    <head>
        <livewire:styles />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
                background-color: #D6D7D8f0;
                overflow-y: auto; /* Prevent scrolling */
            }

            #menu {
        position: absolute; /* Change position to absolute */
        background-color: #2D349A;
        color: #fff;
        padding: 40px;
        text-align: left;
        width: 240px;
        height: 1100px;
        overflow-y: auto;
        z-index: 500;
        top: 102px; /* Position menu at the top of the viewport */
        left: 0; /* Position menu at the left of the viewport */
    }

            #userPhoto {
                width: 100px; /* Set the width of the profile photo */
                height: 100px; /* Set the height of the profile photo */
                border-radius: 50%; /* Make it circular */
                margin-bottom: 10px; /* Added margin below the user's position */
                overflow: hidden;
            }

            #userPhoto img {
                width: 100%; /* Make the image fill the container */
                height: auto; /* Maintain aspect ratio */
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
                margin-bottom: 10px; /* Added margin below the user's name */
            }

            #welcomeText {
                color: #fff;
                margin-bottom: 20px; /* Added margin below the welcome text */
            }

            #menu a {
                color: #fff;
                text-decoration: none;
                margin: 15px 0; /* Adjusted vertical margin */
                font-size: 16px;
                display: flex;
                align-items: center;
            }

            #menu a i {
                margin-right: 10px; /* Added margin to the right of the icon */
            }

            #menu a:hover {
                text-decoration: underline;
            }

            #logout {
                color: #fff;
                text-decoration: none;
                margin-top: auto !important; /* Set margin-top to auto */
                font-size: 16px;
                cursor: pointer; /* Added cursor style */
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
        padding: 5px; /* Adjusted the padding to make it smaller */
        background-color: #fff;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
            }


    #content {
        margin-right: 50px;
        margin-left: 370px;
        margin-bottom: 50px;
        padding-top: 50px;
        text-align: center;
        background-color: #fff;
        border-radius: 15px;
        height: 800px;
    }

    #searchBar {
            display: flex;
            align-items: center;
            position: relative;
            right: 25px;
        }

        #searchIcon {
            position: absolute;
            left: 15px;
            cursor: pointer;
            width: 20px;
            height: 20px;
            opacity: 0.8;
        }

        #searchInput {
            padding-left: 30px;
            border: none;
            border-radius: 8px;
            background-color: #F0F0F0;
            outline: none;
            width: 200px;
            height: 30px;
            margin-left: 10px;
            opacity: 1.0;
        }
        #searchContainer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px; /* Adjusted margin bottom */
    margin-top: -75px;
}

#textContainerGrid {
    display: grid;
    grid-template-columns: repeat(2, 8fr); /* 4 columns */
    gap: 20px; /* Spacing between text containers */
    justify-items: center; /* Center align items horizontally */
}

.outerContainer {
    display: flex;
    flex-direction: column; /* Align items vertically */
    align-items: flex-start; /* Align items to the left */
    margin-bottom: 20px; /* Adjust spacing between containers */
}

.outerContainer a {
    font-weight: bold; /* Optionally make titles bold */
    margin-bottom: 5px; /* Adjust spacing between title and text container */
}

.textContainer {
    border: 1px solid #000000; /* Border styling */
    background-color: #E8E8E8;
    border-radius: 8px; /* Rounded corners */
    width: 250px; /* Fixed width for consistent layout */
    height: auto; /* Fixed height for consistent layout */
    font-size: 16px;
}

.custom-divider {
    border: none; /* Remove default border */
    border-top: 2px solid #000; /* Set border on top */
    width: 80%; /* Set the width */
    margin: 10px auto; /* Center the divider and add margin */
    margin-bottom: 20px;
}

#backButton {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;

}

#backButton i {
    margin-right: 5px;
}

#title {
    margin-top:70px;
    margin-right: 10px; /* Set right margin to auto to align to the left */
    padding-right: 150px;
    text-align: center; /* Align the text to the left */
    background-color: transparent;
    border-radius: 15px;
    height: 30px;
}




        </style>
    </head>

    <body>
        <div id="menu">
            @auth
            <div id="userPhoto">
                @if(auth()->user()->profile_photo_path)
                    <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}" alt="Profile Photo">
                @else
                    <!-- Default profile photo or placeholder image -->
                    <img src="{{ asset('storage/UoAqIOtb87mT4dmcvldVz6GyFtljRv-metaMzc1NDU1MTcxXzE4MDM1MDU3MDAwNTE3MzVfMzQyODU0NzAzNjI2NTM4MDk5MV9uLmpwZw==-.jpg') }}" alt="Profile Photo">
                @endif
            </div>

            <div id="welcomeText">Welcome!</div>
            <div id="userName">{{ auth()->user()->name }}</div>
            <div id="userPosition">{{ auth()->user()->position }}</div>
            <!-- Separator -->
            <div id="userPositionSeparator"></div>
            <a href="#Dashboard" style="margin-bottom: 40px; margin-top: 40px;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#Information" style="margin-bottom: 40px;"><i class="fas fa-user"></i> Personal Information</a>
            <a id="#Suppliers' Database" href="{{ route('supplier.table') }}" style="margin-bottom: 40px;"><i class="fas fa-sign-out-alt"></i> Suppliers' Database </a>
            <a id="Monitoring" style="margin-bottom: 40px;"><i class="fas fa-chart-line"></i> Procurement Monitoring</a>
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

        <div id="title">
            <div>
                <a style="padding-top: 220px; text-decoration: none; color: black;" href="{{ route('info') }}">SUPLLIER'S INFORMATION</a>
                <a style="padding-top: 220px; padding-left: 55px; text-decoration: none; color: black;" " href="{{ route('history') }}">SUPPLIER'S HISTORY</a>
            </div>
        </div>


        <div id="content">
            <div id="header" style="display: flex; align-items: center;">
                <h3 style="margin-left: 100px; padding-right: 400px;">SUPPLIER'S INFORMATION</h3>
                <button id="backButton" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>

            </div>

            <div id="divider">
                <hr class="custom-divider">
            </div>


            <div id="textContainerGrid">
                <div class="outerContainer">
                    <a>Supplier's Name:</a>
                    <div class="textContainer">
                        <p>Text 1</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Category:</a>
                    <div class="textContainer">
                        <p>Text 2</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Supplier Address:</a>
                    <div class="textContainer">
                        <p>Text 3</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Supplier Representative’s Name:</a>
                    <div class="textContainer">
                        <p>Text 4</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Email:</a>
                    <div class="textContainer">
                        <p>Text 5</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Supplier Rep’s contact #:</a>
                    <div class="textContainer">
                        <p>Text 6</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Contact Number:</a>
                    <div class="textContainer">
                        <p>Text 7</p>
                    </div>
                </div>
                <div class="outerContainer">
                    <a>Supplier Representative’s Email:</a>
                    <div class="textContainer">
                        <p>Text 8</p>
                    </div>
                </div>
            </div>
        </div>


    </body>
    <script>
        function goBack() {
    window.history.back();
}
    </script>
    </x-layouts.app>
