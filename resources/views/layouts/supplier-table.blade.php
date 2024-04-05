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
    height: auto;
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
    margin-top: 50px;
    margin-right: 50px;
    margin-left: 370px;
    margin-bottom: 50px;
    padding: 120px 50px;
    text-align: center;
    background-color: #fff;
    border-radius: 15px;
    max-height: 400px; /* Adjust height as needed */
    height: 100%;
}

#searchContainer {
    margin-bottom: 5px; /* Adjusted margin bottom */
    margin-top: -150px;
}

table {
    width: 100%; /* Set table width to 100% */
    border-collapse: collapse;
    border-radius: 15px; /* Added rounded corners */
}

table th, table td {
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
    margin-bottom: 5px; /* Adjusted margin bottom */
    margin-top: -75px;
}

        #supplierNameSearchInput,
#categorySearchInput {
    margin-top: 0; /* Adjusted margin top */
    margin-bottom: 10px; /* Adjusted margin bottom */
    border: 2px solid black;
    border-radius: 8px;
    background-color: #F0F0F0;
    outline: none;
    width: 200px;
    height: 30px;
    margin-right: 10px; /* Add margin between the inputs and the button */
    opacity: 1.0;
}

a[href="{{ route('layouts.create') }}"] {
    background-color: green;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-left: 10px; /* Adjusted margin */
}

#supplierListView {
            margin-top: 20px; /* Adjust margin */
            width: 100%;
        }

        .supplierListItem {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px; /* Adjust padding */
            border-bottom: 1px solid #ddd; /* Add bottom border */
        }

        .supplierListItem:last-child {
            border-bottom: none; /* Remove bottom border for the last item */
        }

        .supplierListItem > span {
            flex: 1; /* Distribute space evenly */
        }

#pagination {
    text-align: center; /* Center the pagination */
    margin-top: 20px; /* Add margin between table and pagination */
    margin-right: 150px;
    font-weight: bold;
}

#pagination a {
    color: black; /* Change font color to black */
    text-decoration: none; /* Remove underline */
    margin: 0 5px; /* Add margin between pages */
    margin-left: 25px;
    font-weight: bold;
}

#pagination a.active {
    color: blue; /* Change font color to blue for the active page */
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


    <div id="content">
        <div id="searchContainer" style="display: flex; align-items: center; justify-content: space-between;">
            <div>
                <label for="searchInput">Search a Supplier:</label>
                <input type="text" id="supplierNameSearchInput" placeholder="Search Here..." oninput="filterSupplierTable('supplierName')">
                <br><br>
                <label for="searchInput">Search a Category:</label>
                <input type="text" id="categorySearchInput" placeholder="Category..." oninput="filterSupplierTable('category')">
                <a href="{{ route('layouts.create') }}" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-left: 10px;">Add Supplier</a>
            </div>

        </div>
        <table>

            <tbody id="supplierListView">
                <!-- Supplier list view will be dynamically populated here -->
            </tbody>
        </table>
        <!-- Pagination links -->
        <div id="pagination">
            <!-- Pagination links will be dynamically populated here -->
        </div>

        </div>
        <script>
            function toggleSearchIcon() {
                var searchInput = document.getElementById('searchInput');
                var searchIcon = document.getElementById('searchIcon');

                if (searchInput.value.trim() !== '') {
                    searchIcon.style.display = 'none';
                } else {
                    searchIcon.style.display = 'block';
                }
            }

            function filterSupplierTable(filterType) {
                var input, filter, table, tr, td, i, txtValue;
                if (filterType === 'supplierName') {
                    input = document.getElementById("supplierNameSearchInput");
                    filter = input.value.toUpperCase();
                } else {
                    input = document.getElementById("categorySearchInput");
                    filter = input.value.toUpperCase();
                }
                table = document.getElementById("supplierListView");
                tr = table.getElementsByClassName("supplierListItem");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("span")[0]; // Changed index to 0 to target the name span
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }

            // Function to populate the supplier list view
            function populateSupplierListView(suppliers) {
            var listView = document.getElementById('supplierListView');
            listView.innerHTML = ''; // Clear previous content

            // Create and append a header row
            var headerRow = document.createElement('tr');
            headerRow.innerHTML = `
                <th>No.</th>
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Category</th>
                <th>Edit Information</th>
                <th>Delete Information</th>
            `;
            listView.appendChild(headerRow);

            // Iterate through suppliers and populate table rows
            suppliers.forEach(function(supplier, index) {
                var row = document.createElement('tr'); // Create a table row

                // Create and populate table data for each column
                var numberCell = document.createElement('td');
                numberCell.textContent = index + 1; // Add 1 to index to start from 1
                row.appendChild(numberCell);

                var idCell = document.createElement('td');
                idCell.textContent = supplier.id; // Assuming you have an ID property in supplier object
                row.appendChild(idCell);

                var nameCell = document.createElement('td');
                nameCell.textContent = supplier.name;

                var infoRoute = '{{ route('info') }}';

                nameCell.innerHTML = `<a href="${infoRoute}" style="text-decoration: none; color: black;">${supplier.name}</a>`;
                row.appendChild(nameCell);


                var categoryCell = document.createElement('td');
                categoryCell.textContent = supplier.category;
                row.appendChild(categoryCell);

                var editCell = document.createElement('td');
                var editButton = document.createElement('button');
                editButton.textContent = 'Edit';
                editButton.onclick = function() {
                    window.location.href = '{{ route('edit') }}'; // Redirect to the edit page
                };
                editCell.appendChild(editButton);
                row.appendChild(editCell);

                var deleteCell = document.createElement('td');
                deleteCell.innerHTML = '<button>Delete</button>'; // Example delete button
                row.appendChild(deleteCell);

                listView.appendChild(row); // Append the row to the table body
            });
        }

        // Function to populate the pagination links
        function populatePaginationLinks(currentPage, lastPage) {
            var pagination = document.getElementById('pagination');
            pagination.innerHTML = ''; // Clear previous content

            // Create Previous button
            var previousLink = document.createElement('a');
            previousLink.href = '#';
            previousLink.textContent = '< Previous';
            previousLink.addEventListener('click', function() {
                // Handle click event for previous button
                var newPage = currentPage - 1;
                if (newPage >= 1) {
                    currentPage = newPage;
                    // Update the displayed data
                    populateSupplierListView(sampleSuppliers.slice((currentPage - 1) * 10, currentPage * 10));
                    // Update pagination links
                    populatePaginationLinks(currentPage, lastPage);
                }
            });
            pagination.appendChild(previousLink);

            // Create page links
            for (var i = 1; i <= lastPage; i++) {
                var link = document.createElement('a');
                link.href = '#'; // Add your link URL here
                link.textContent = i;
                if (i === currentPage) {
                    link.classList.add('active'); // Apply active class to current page
                }
                link.addEventListener('click', function(event) {
                    // Handle pagination click event here
                    var newPage = parseInt(event.target.textContent);
                    currentPage = newPage;
                    // Update the displayed data
                    populateSupplierListView(sampleSuppliers.slice((currentPage - 1) * 10, currentPage * 10));
                    // Update pagination links
                    populatePaginationLinks(currentPage, lastPage);
                });
                pagination.appendChild(link);
            }

            // Create Next button
            var nextLink = document.createElement('a');
            nextLink.href = '#';
            nextLink.textContent = 'Next >';
            nextLink.addEventListener('click', function() {
                // Handle click event for next button
                var newPage = currentPage + 1;
                if (newPage <= lastPage) {
                    currentPage = newPage;
                    // Update the displayed data
                    populateSupplierListView(sampleSuppliers.slice((currentPage - 1) * 10, currentPage * 10));
                    // Update pagination links
                    populatePaginationLinks(currentPage, lastPage);
                }
            });
            pagination.appendChild(nextLink);
        }

        // Sample data for testing
        var sampleSuppliers = [
            { name: 'Jollibee Foods Corporation', category: 'Goods', id: 1},
            { name: 'Freetos Caterine Services', category: 'Goods', id: 2 },
            { name: '3CA Construction', category: 'Infrastructure', id: 3 },
            { name: 'PLDT INC. Corporation', category: 'Consulting Services', id: 1 },
            { name: 'San Miguel Food & Beverage, INC.', category: 'Goods', id: 2 },
            { name: 'Robinsons Retail Holdings, INC.', category: 'Goods', id: 3 },
            { name: 'Universal Robina Corporation', category: 'Goods', id: 1 },
            { name: 'DMCI Project Developers INC.', category: 'Infrastructure', id: 2 },
            { name: 'MEGAWIDE Construction Corp', category: 'Infrastructure', id: 3 },
            { name: 'Converge ICT Solution, INC.', category: 'Consulting Services', id: 1 },
            { name: 'Globe Telecom, INC.', category: 'Consulting Services', id: 2 },
            { name: 'BDO Unibank INC.', category: 'Consulting Services', id: 3 },
            // Add more sample suppliers as needed
        ];

        // Populate the supplier list view and pagination on page load
        document.addEventListener('DOMContentLoaded', function() {
            populateSupplierListView(sampleSuppliers.slice(0, 10)); // Initial population with first 10 items
            populatePaginationLinks(1, Math.ceil(sampleSuppliers.length / 10)); // Calculate total pages based on data length
        });

        </script>

</body>
</x-layouts.app>
