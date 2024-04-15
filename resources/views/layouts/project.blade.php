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
                overflow-x: hidden;
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
                border-radius: 5px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            /* Hide scrollbar for Chrome, Safari, and Opera */
            #content::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for Firefox */
            #content {
                scrollbar-width: none;
            }

            #content {
                position: absolute;
                margin-top: 30px;
                margin-right: 50px;
                margin-left: 370px;
                margin-bottom: 50px;
                padding: 120px 50px;
                text-align: center;
                align-items: center;
                background-color: transparent;
                /* Fixed typo: removed semicolon */
                height: 350px;
                overflow-y: auto;
                /* Enable vertical scrolling */
                overflow-x: hidden;
                /* Disable horizontal scrolling */
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

            #header {
                margin-left: 0px;
                padding-top: 1000px;
                position: relative;
                top: -120px;
                right: 50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
            }

            #timeline {
                margin-left: 0px;
                padding-top: 1000px;
                position: relative;
                top: -70px;
                right: 50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                width: 935px;
                height: 550px;

            }

            .custom-divider {
                border: none;
                /* Remove default border */
                border-top: 2px solid #000;
                /* Set border on top */
                width: 80%;
                /* Set the width */
                margin: 10px auto;
                /* Center the divider and add margin */
                margin-bottom: 20px;
            }

            #divider {
                position: relative;
            }

            .vertical-line {
                position: absolute;
                border-left: 2px solid #000;
                height: 50px;
                /* Adjust height as needed */
                top: 20px;
                /* Adjust top position as needed */
            }

            .vertical-lines {
                position: relative;
            }

            .circle {
                position: relative;
                top: -8px;
                /* Adjust as needed */
                background-color: #9B760A;
                /* Adjust circle background color */
                width: 30px;
                height: 30px;
                border-radius: 50%;
            }

            #details {

                position: relative;
                margin-top: 250px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
                height: 150px;
            }

            #textContainerGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                /* 3 columns */
                gap: 20px;
                /* Spacing between text containers */
                justify-items: center;
                /* Center align items horizontally */
                margin-bottom: 20px;
            }

            .details-container {
                border: 2px solid #000;
                padding: 10px;
                width: 200px;
                /* Adjust width as needed */
                background-color: #E8E8E8;
                border-radius: 5px;
                height: 5px;
                margin-bottom: 20px;
            }

            .details-text {
                position: relative;
                top: -23px;
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
            }

            #text p {
                white-space: nowrap;
                /* Prevent text from wrapping */
                overflow: hidden;
                /* Hide overflow text */
                text-overflow: ellipsis;
                /* Add ellipsis (...) for overflow text */
            }

            #contactheader {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
                height: 50px;
            }

            #contactdetails {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
                height: 100px;
            }

            .contact-container {
                border: 2px solid #000;
                padding: 10px;
                width: 400px;
                /* Adjust width as needed */
                background-color: #E8E8E8;
                border-radius: 5px;
                height: 5px;
                margin-bottom: 20px;
            }

            #contactGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                /* 3 columns */
                gap: 20px;
                /* Spacing between text containers */
                justify-items: center;
                /* Center align items horizontally */
                margin-bottom: 20px;
                margin-left: 45px;
            }

            #conferenceheader {
                position: relative;
                margin-top: 160px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
                height: 50px;
            }

            #conferencedetails {
                position: relative;
                margin-top: 40px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: transparent;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 935px;
                height: 550px;
            }

            #conferencestatus {
                position: relative;
                margin-top: 40px;
                right: 10px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #ffffff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 465px;
                height: 50px;
            }

            #conferencestatus1 {
                position: relative;
                margin-top: -70px;
                right: -560px;
                top: -50px;
                padding: 10px;
                /* Adjusted the padding to make it smaller */
                background-color: #ffffff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 365px;
                height: 50px;
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
                <h2>Procurement Monitoring</h2>
            </div>
        </div>


        <div id="content">
            <div id="header">
                <h3 style = "position: relative; right: 280px; top: -5px;">Information Technology Equipment</h3>
                <a href="{{ route('layouts.create') }}"
                    style="background-color: #9B760A; color: white; border-radius: 5px; text-decoration: none; position: relative; top: -40px; margin-left:400px;">Amendment</a>
                <a href="{{ route('layouts.create') }}"
                    style="background-color: green; color: white; border-radius: 5px; text-decoration: none; position: relative; top: -40px;">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('layouts.create') }}"
                    style="background-color: green; color: white; border-radius: 5px; text-decoration: none; position: relative; top: -40px;">
                    <i class="fas fa-arrow-left"></i> Return
                </a>
            </div>

            <div id="timeline">
                <h3>Procurement Timeline</h3>
                <div id="divider">
                    <hr class="custom-divider">
                </div>
                <div id = "Date" style = "margin-bottom: 100px;">
                    <a> Today is Friday, April 12, 2024</a>
                </div>
                <div id="divider">
                    <hr class="custom-divider">
                    <div class="circle" style = " left: 190px; top: -36px;"></div> <!-- First circle -->
                    <div class="circle" style = " left: 435px; top: -66px;"></div> <!-- Second circle -->
                    <div class="circle" style = " left: 700px; top: -96px;"></div> <!-- Third circle -->
                    <div class="vertical-line" style="left: 205px; top: 30px;"></div> <!-- First vertical line -->
                    <div class="vertical-line" style="left: 449px; top: 30px;"></div> <!-- Second vertical line -->
                    <div class="vertical-line" style="left: 715px; top: 30px;"></div> <!-- Third vertical line -->
                </div>

                <div id="status">
                    <a style="position: relative; right: 250px; font-size: 14px;">procurement planning</a>
                    <br>
                    <a style="position: relative; right: 190px; font-size: 14px;">Annual Procurement Plan Submission</a>

                    <a style="position: relative; right: 120px; top: -20px; font-size: 14px;">procurement planning</a>
                    <br>
                    <a style="position: relative; right: -65px; top: -20px; font-size: 14px;">Amendatory
                        APP/Resolution</a>

                    <a style="position: relative; right: -180px; top: -40px; font-size: 14px;">procurement planning</a>
                    <br>
                    <a style="position: relative; right: -270px; top: -40px; font-size: 14px;">Amendatory
                        APP/Resolution</a>


                </div>

                <div id="fullview" style = "position: relative; top: 100px;">
                    <button> view Full Timeline</button>
                </div>

                <div id="details">
                    <div id="textContainerGrid">
                        <div class="details-container">
                            <div id = "text" style = "position: relative; top: -50px; left: -90px;">
                                <p> Code</p>
                            </div>
                            <p class="details-text" style = "position: relative; top:-56px;">Details 1</p>
                        </div>

                        <div class="details-container">
                            <div id = "text" style = "position: relative; top: -50px; left: -75px;">
                                <p>Category:</p>
                            </div>
                            <p class="details-text" style = "position: relative; top:-56px;">Details 1</p>
                        </div>

                        <div class="details-container">
                            <div id = "text" style = "position: relative; top: -50px; left: -55px;">
                                <p>PMO/End-user:</p>
                            </div>
                            <p class="details-text" style = "position: relative; top:-56px;">Details 1</p>
                        </div>

                        <div class="details-container">
                            <div id = "text"
                                style = "position: relative; top: -50px; left: -7px; display:inline-flex;">
                                <p>Early Procurement Activity?:</p>
                            </div>
                            <p class="details-text" style = "position: relative; top:-74px;">Details 1</p>
                        </div>

                        <div class="details-container">
                            <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                <p>Mode of Procurement:</p>
                            </div>
                            <p class="details-text" style = "position: relative; top:-58px;">Details 1</p>
                        </div>
                    </div>
                    <div id = "contactheader">
                        <h2 style = "position:relative; top: -7px;"> End-User's Contact Person</h2>
                    </div>
                    <div id = "contactdetails">
                        <div id="contactGrid">
                            <div class="contact-container">
                                <div id = "text" style = "position: relative; top: -50px; left: -60px;">
                                    <p> End-user’s Contact Person (if applicable):</p>
                                </div>
                                <p class="details-text" style = "position: relative; top:-56px;">Details 1</p>
                            </div>

                            <div class="contact-container">
                                <div id = "text" style = "position: relative; top: -50px; left: -35px;">
                                    <p>End-user’s Contact Person’s Email (if applicable):</p>
                                </div>
                                <p class="details-text" style = "position: relative; top:-56px;">Details 1</p>
                            </div>
                        </div>

                        <div id = "conferenceheader">
                            <h2 style ="position:relative"; top: -7px;>Pre-Procurement Conference</h2>
                        </div>
                        <div id = "conferencedetails">
                            <div id = "conferencestatus">
                                <h4 style = "position: relative; right: 150px; top: -4px;">Documents</h4>
                                <h4 style = "position: relative; left: 150px; top: -45px;">statuses</h4>
                            </div>

                            <div id = "conferencestatus1">
                                <h4 style = "position: relative; top: -4px;">Actions</h4>
                            </div>

                        </div>


                    </div>
                </div>

            </div>

        </div>

        </div>

        </div>

    </body>
</x-layouts.app>
