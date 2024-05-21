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
                width: 2500px;
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
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 1073px;
            }

            #timeline {
                margin-left: 0px;
                padding-top: 1000px;
                position: relative;
                top: -70px;
                right: 50px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                width: 1073px;
                height: 550px;
            }

            .custom-divider {
                border: none;
                border-top: 2px solid #000;
                width: 80%;
                margin: 10px auto;
                margin-bottom: 20px;
            }

            #divider {
                position: relative;
            }

            .vertical-line {
                position: absolute;
                border-left: 2px solid #000;
                height: 50px;
                top: 20px;
            }

            .vertical-lines {
                position: relative;
            }

            .circle {
                position: relative;
                top: -8px;
                background-color: #9B760A;
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
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 150px;
                width: 1073px;
            }

            #textContainerGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                justify-items: center;
                margin-bottom: 20px;
            }

            .details-container {
                border: 2px solid #000;
                padding: 10px;
                width: 200px;
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
                overflow: hidden;
                text-overflow: ellipsis;
            }

            #contactheader {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 1073px;
            }

            #contactdetails {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 100px;
                width: 1073px;
            }

            .contact-container {
                border: 2px solid #000;
                padding: 10px;
                width: 400px;
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
                gap: 20px;
                justify-items: center;
                margin-bottom: 20px;
                margin-left: 45px;
            }

            #conferenceheader {
                position: relative;
                margin-top: 160px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 1073px;
            }

            #conferencedetails {
                position: relative;
                margin-top: 40px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: transparent;
                border-radius: 4px;
                display: center;
                height: 550px;
                width: 536.5px;
            }

            #conferencestatus {
                position: relative;
                margin-top: 40px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: #ffffff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 536.5px;
            }

            #conferencestatus1 {
                position: relative;
                margin-top: -70px;
                right: -560px;
                top: -50px;
                padding: 10px;
                background-color: #ffffff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 500px;
            }

            #conferencestatus1 button {
                position: relative;
                top: -4px;
                color: white;
                border: none;
                margin-top: 17px;
                border-radius: 5px;
                /* Optional: Remove border for cleaner look */
                padding: 5px 10px;
                /* Optional: Add padding for better appearance */
                cursor: pointer;
                /* Optional: Change cursor to pointer on hover */
            }

            #conferencestatus1 .approved {
                background-color: #33A44C;
            }

            #conferencestatus1 .reject {
                background-color: #C90000;
            }

            #conferencestatus1 .view-document {
                background-color: black;
            }

            #Annualheader {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -400px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 1073px;
            }

            #AnnualInfo {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -500px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 550px;
                width: 1073px;
            }

            #annualContainerGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                column-gap: 10px;
                gap: 20px;
                justify-items: center;
                margin-bottom: 20px;
            }

            .annual-container {
                border: 2px solid #000;
                padding: 10px;
                width: 300px;
                background-color: #E8E8E8;
                border-radius: 5px;
                height: 5px;
                margin-bottom: 20px;
            }

            .annual-text {
                position: absolute;
                top: -23px;
                right: 80px;
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
            }

            #sourceFunds {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: 100px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 100px;
                width: 1073px;
            }

            #FundsGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                column-gap: 10px;
                gap: 20px;
                justify-items: center;
                margin-bottom: 20px;
            }

            .Funds-container {
                border: 2px solid #000;
                padding: 10px;
                width: 800px;
                background-color: #E8E8E8;
                border-radius: 5px;
                height: 5px;
                margin-bottom: 20px;
            }

            .Funds-text {
                position: absolute;
                top: -23px;
                right: 320px;
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
            }

            #ABCdetails {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: -50px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 100px;
                width: 1073px;
            }

            #ABCGrid {
                position: relative;
                top: 40px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                column-gap: 10px;
                gap: 20px;
                justify-items: center;
                margin-bottom: 20px;
            }

            .ABC-container {
                border: 2px solid #000;
                padding: 10px;
                width: 200px;
                background-color: #E8E8E8;
                border-radius: 5px;
                height: 5px;
                margin-bottom: 20px;
            }

            .ABC-text {
                position: absolute;
                top: -23px;
                right: 65px;
                font-family: Arial, sans-serif;
                font-size: 16px;
                color: #333;
            }

            #observerFunds {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: -30px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 100px;
                width: 1073px;
            }

            #dateheader {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -110px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 50px;
                width: 1073px;
            }

            #invitationInfo {
                position: relative;
                margin-top: 120px;
                right: 10px;
                top: -210px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 350px;
                width: 1073px;
            }

            #remarks {
                position: relative;
                margin-top: 10px;
                right: 10px;
                top: -170px;
                padding: 10px;
                background-color: #fff;
                border-radius: 4px;
                display: center;
                height: 100px;
                width: 1073px;
            }


            .dropdown-btn {
                background-color: #9B760A;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
                top: 100%;
                /* Align the top edge of the dropdown content with the bottom edge of the button */
                left: 0;
                /* Align the left edge of the dropdown content with the left edge of the button */
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1
            }

            .dropdown-btn:hover .dropdown-content {
                display: block;
            }

            .common-button {
                color: white;
                border-radius: 5px;
                text-decoration: none;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s;
                margin-left: 10px;
                /* Add some space between buttons */
            }

            .common-button i {
                margin-right: 5px;
            }

            .button-edit {
                background-color: #3C94C5;
            }

            .button-return {
                background-color: #000;
            }

            .button-another {
                background-color: black;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown-btn {
                background-color: #9B760A;
                color: white;
                border-radius: 5px;
                text-decoration: none;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s;
                display: flex;
                align-items: center;
            }

            .dropdown-btn i {
                margin-left: 5px;
            }

            /* Button Styles */
            .view-full-timeline-button {
                display: flex;
                align-items: center;
                background-color: #000;
                color: #fff;
                border: none;
                border-radius: 15px;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .view-full-timeline-button i {
                margin-right: 10px;
                font-size: 20px;
                /* Adjust icon size if necessary */
            }

            /* Icon Styles */
            .icon-eye::before {
                content: "\f06e";
                /* FontAwesome eye icon unicode */
                font-family: "Font Awesome 5 Free";
                /* Adjust according to your FontAwesome version */
                font-weight: 900;
            }

            /* Button Hover Effect */
            .view-full-timeline-button:hover {
                background-color: #333;
            }

            /* Parent div to center the button */
            #fullview {
                display: flex;
                justify-content: center;
                position: relative;
                top: 100px;
            }

            #fullview a {
                text-decoration: none;
                /* Remove underline */
            }

            /* Button Styles */
            .view-full-timeline-button {
                display: flex;
                align-items: center;
                background-color: #000;
                color: #fff;
                border: none;
                border-radius: 15px;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
                margin: auto;
                /* This ensures it is centered if other flex properties are applied */
            }

            .view-full-timeline-button i {
                margin-right: 10px;
                font-size: 20px;
                /* Adjust icon size if necessary */
            }

            /* Icon Styles */
            .icon-eye::before {
                content: "\f06e";
                /* FontAwesome eye icon unicode */
                font-family: "Font Awesome 5 Free";
                /* Adjust according to your FontAwesome version */
                font-weight: 900;
            }

            /* Button Hover Effect */
            .view-full-timeline-button:hover {
                background-color: #333;
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
            <div id="header" style="display: flex; justify-content: space-between; align-items: center;">
                <h3>Information Technology Equipment</h3>
                <div style="display: flex; align-items: center;">
                    <div class="dropdown">
                        <button class="dropdown-btn">Amendment
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">View Documents</a>
                            <a href="#">Accept</a>
                            <a href="#">Reject</a>
                        </div>
                    </div>
                    <form method="get" action="{{ route('layouts.create') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="common-button button-edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </form>

                    <form method="get" action="{{ route('layouts.create') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="common-button button-return">
                            <i class="fas fa-arrow-left"></i> Return
                        </button>
                    </form>
                </div>
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
                    <div class="circle" style = " left: 210px; top: -36px;"></div> <!-- First circle -->
                    <div class="circle" style = " left: 500px; top: -66px;"></div> <!-- Second circle -->
                    <div class="circle" style = " left: 800px; top: -96px;"></div> <!-- Third circle -->
                    <div class="vertical-line" style="left:225px; top: 30px;"></div> <!-- First vertical line -->
                    <div class="vertical-line" style="left: 515px; top: 30px;"></div> <!-- Second vertical line -->
                    <div class="vertical-line" style="left: 815px; top: 30px;"></div> <!-- Third vertical line -->
                </div>

                <div id="status">
                    <a style="position: relative; right: 325px; font-size: 14px;">Pre-Procurement Conference</a>
                    <br>
                    <a style="position: relative; right: 250px; font-size: 14px;">Bidding Documents with ITB</a>

                    <a style="position: relative; right: 160px; top: -20px; font-size: 14px;">Pre-Procurement
                        Conference</a>
                    <br>
                    <a style="position: relative; right: -100px; top: -20px; font-size: 14px;">Minutes of
                        Pre-Procurement Conference</a>

                    <a style="position: relative; right: -180px; top: -40px; font-size: 14px;">Advertising Posting of
                        Invitation to Bid PhilGEPS</a>
                    <br>
                    <a style="position: relative; right: -270px; top: -40px; font-size: 14px;">Amendatory
                        APP/Resolution</a>


                </div>

                <div id="fullview" style="position: relative; top: 100px;">
                    <a href="{{ route('timeline') }}">
                        <button class="view-full-timeline-button">
                            <i class="icon-eye"></i> View Full Timeline
                        </button>
                    </a>
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

                            <div id = "conferencestatus">
                                <h4 style = "position: relative; right: 110px; top: -4px;">Bidding Document with ITB
                                    <h4 style = "position: relative; left: 150px; top: -45px;">statuses</h4>
                            </div>

                            <div id="conferencestatus1">
                                <button class="approved">Approved</button>
                                <button class="reject">Reject</button>
                                <button class="view-document">View Document</button>
                            </div>


                            <div id = "conferencestatus">
                                <h4 style = "position: relative; right: 70px; top: -4px;">Minutes of Pre-Procurement
                                    Conference
                                </h4>
                                <h4 style = "position: relative; left: 150px; top: -45px;">statuses</h4>
                            </div>

                            <div id="conferencestatus1">
                                <button class="approved">Approved</button>
                                <button class="reject">Reject</button>
                                <button class="view-document">View Document</button>
                            </div>

                        </div>

                        <div id = "Annualheader">
                            <h2 style = "position:relative; top: -7px;">Annual Procurement Activities</h2>
                        </div>

                        <div id = "AnnualInfo">
                            <div id="annualContainerGrid">
                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -80px;">
                                        <p> Pre-Proc Conference:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-56px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text" style = "position: relative; top: -50px; left: -95px;">
                                        <p>Ads/Post of IB:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-56px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -35px;">
                                        <p>Pre-bid Conference:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-56px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text"
                                        style = "position: relative; top: -50px; left: -7px; display:inline-flex;">
                                        <p>Eligibility Check:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-74px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Sub/Open of Bids:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Bid Evaluation:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Post Qual:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text"
                                        style = "position: relative; top: -50px; left: -7px; display:inline-flex;">
                                        <p>Date of BAC Resolution Recommending Award:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-73px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Notice of Award:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Contract Signing:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Notice to Proceed:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container" style = "position: relative; right: 100px;">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Delivery/Completion:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                                <div class="annual-container">
                                    <div id = "text" style = "position: relative; top: -50px; left: -29px;">
                                        <p>Inspection & Acceptance:</p>
                                    </div>
                                    <p class="annual-text" style = "position: relative; top:-58px;">Details 1</p>
                                </div>

                            </div>
                            <div id = "sourceFunds">
                                <div id="FundsGrid">
                                    <div class="Funds-container">
                                        <div id = "text" style = "position: relative; top: -50px; left: -340px;">
                                            <p>Source of Funds:</p>
                                        </div>
                                        <p class="Funds-text" style = "position: relative; top:-56px;">Details 1</p>
                                    </div>
                                </div>
                                <div id = "contactheader">
                                    <h2 style = "position:relative; top: -7px;"> ABC (PhP)</h2>
                                </div>
                                <div id = "ABCdetails">
                                    <div id="ABCGrid">
                                        <div class="ABC-container">
                                            <div id = "text"
                                                style = "position: relative; top: -50px; left: -80px;">
                                                <p>Total:</p>
                                            </div>
                                            <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                            </p>
                                        </div>

                                        <div class="ABC-container">
                                            <div id = "text"
                                                style = "position: relative; top: -50px; left: -70px;">
                                                <p>MOOE:</p>
                                            </div>
                                            <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                            </p>
                                        </div>

                                        <div class="ABC-container">
                                            <div id = "text"style="position: relative; top: -50px; left: -85px;">
                                                <p>CO:</p>
                                            </div>
                                            <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                            </p>
                                        </div>
                                    </div>
                                    <div id = "contactheader">
                                        <h2 style = "position:relative; top: -7px;">Contract Cost (PhP)</h2>
                                    </div>
                                    <div id = "ABCdetails">
                                        <div id="ABCGrid">
                                            <div class="ABC-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -80px;">
                                                    <p>Total:</p>
                                                </div>
                                                <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                                </p>
                                            </div>

                                            <div class="ABC-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -70px;">
                                                    <p>MOOE:</p>
                                                </div>
                                                <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                                </p>
                                            </div>

                                            <div class="ABC-container">
                                                <div
                                                    id = "text"style="position: relative; top: -50px; left: -85px;">
                                                    <p>CO:</p>
                                                </div>
                                                <p class="ABC-text" style = "position: relative; top:-56px;">Details 1
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id = "observerFunds">
                                        <div id="FundsGrid">
                                            <div class="Funds-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -315px;">
                                                    <p>List of Invited Observers:</p>
                                                </div>
                                                <p class="Funds-text" style = "position: relative; top:-56px;">Details
                                                    1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id = "dateheader">
                                        <h2 style = "position:relative; top: -7px;">Date of Receipt of Invitation</h2>
                                    </div>

                                    <div id = "invitationInfo">
                                        <div id="annualContainerGrid">
                                            <div class="annual-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -80px;">
                                                    <p> Pre-Proc Conference:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-56px;">
                                                    Details 1</p>
                                            </div>

                                            <div class="annual-container" style = "position: relative; right: 100px;">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -95px;">
                                                    <p>Eligibility Check:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-56px;">
                                                    Details 1</p>
                                            </div>

                                            <div class="annual-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -90px;">
                                                    <p>Sub/Open of Bids:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-56px;">
                                                    Details 1</p>
                                            </div>

                                            <div class="annual-container" style = "position: relative; right: 100px;">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -100px; display:inline-flex;">
                                                    <p>Bid Evaluation:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-74px;">
                                                    Details 1</p>
                                            </div>

                                            <div class="annual-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -115px;">
                                                    <p>Post Qual:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-58px;">
                                                    Details 1</p>
                                            </div>

                                            <div class="annual-container" style = "position: relative; right: 100px;">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -5px; display:inline-flex;">
                                                    <p>Delivery/ Completion/ Acceptance if applicable:</p>
                                                </div>
                                                <p class="annual-text" style = "position: relative; top:-70px;">
                                                    Details 1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id = "remarks">
                                        <div id="FundsGrid">
                                            <div class="Funds-container">
                                                <div id = "text"
                                                    style = "position: relative; top: -50px; left: -235px;">
                                                    <p>Remarks (Explaining changes from the APP):</p>
                                                </div>
                                                <p class="Funds-text" style = "position: relative; top:-56px;">
                                                    Details
                                                    1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id = "remarks">
                                        <div id="FundsGrid">
                                            <div id = "text"
                                                style = "position: relative; top: -50px; left: -135px;">
                                                <p>Procurement Status (Completed/ Ongoing/ Failed Procurement):</p>
                                                <p
                                                    style="font-weight: bold; border-radius: 5px; padding: 3px 6px; background-color: #33FF00;">
                                                    Completed
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

    </body>

    <script>
        function logout() {
            // Code to perform logout actions, such as clearing session data or redirecting to a logout page
            // For example:
            window.location.href = "/logout"; // Redirect to the logout page
        }
        var dropdown = document.getElementsByClassName("dropdown-btn")[0];
        var dropdownContent = document.getElementsByClassName("dropdown-content")[0];

        dropdown.addEventListener("click", function() {
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    </script>
</x-layouts.app>
