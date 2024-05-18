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
                height: auto;
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
                background-color: #fff;
                border-radius: 15px;
                height: 450px;
            }

            #searchContainer {
                margin-bottom: 5px;
                /* Adjusted margin bottom */
                margin-top: -150px;
            }

            table {
                width: 100%;
                /* Set table width to 100% */
                border-collapse: collapse;
                border-radius: 15px;
                /* Added rounded corners */
            }

            table th,
            table td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #welcomeMessage {
                font-size: 18px;
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
                margin-bottom: 5px;
                /* Adjusted margin bottom */
                margin-top: -75px;
            }

            #supplierNameSearchInput,
            #categorySearchInput {
                margin-top: 0;
                /* Adjusted margin top */
                margin-bottom: 10px;
                /* Adjusted margin bottom */
                border: 2px solid black;
                border-radius: 8px;
                background-color: #F0F0F0;
                outline: none;
                width: 200px;
                height: 30px;
                margin-right: 10px;
                /* Add margin between the inputs and the button */
                opacity: 1.0;
            }

            a[href="{{ route('layouts.create') }}"] {
                background-color: green;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                margin-left: 10px;
                /* Adjusted margin */
            }

            #supplierListView {
                margin-top: 20px;
                /* Adjust margin */
                width: 100%;
            }

            .supplierListItem {
                display: flex;
                justify-content: space-between;
                padding: 10px 20px;
                /* Adjust padding */
                border-bottom: 1px solid #ddd;
                /* Add bottom border */
            }

            .supplierListItem:last-child {
                border-bottom: none;
                /* Remove bottom border for the last item */
            }

            .supplierListItem>span {
                flex: 1;
                /* Distribute space evenly */
            }

            #pagination {
                text-align: center;
                /* Center the pagination */
                margin-top: 20px;
                /* Add margin between table and pagination */
                margin-right: 150px;
                font-weight: bold;
            }

            #pagination a {
                color: black;
                /* Change font color to black */
                text-decoration: none;
                /* Remove underline */
                margin: 0 5px;
                /* Add margin between pages */
                margin-left: 25px;
                font-weight: bold;
            }

            #pagination a.active {
                color: blue;
                /* Change font color to blue for the active page */
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
            <img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-6/438299148_1946847819050855_5320396018349860125_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGMFenxKQuw1bAUGQdBG7aY0UgvBfsGLrLRSC8F-wYuskLlXQv-cidS29TP80FImxY7_6jm7dMEWqt0tCmjsMtC&_nc_ohc=i5YzQ2RTI5gQ7kNvgFSOQHL&_nc_ht=scontent.fmnl14-1.fna&oh=00_AfDHRLIfrpFbRBXnKP3Wl-y5aYZ7fVgy0JR7ta13XfmVfg&oe=663E61B4"
                alt="Description of the photo">
        </div>

        </div>
    </body>
</x-layouts.app>