@extends('layouts.master')

@section('content')
<head>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom pop-up styles */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 5px;
            z-index: 1000;
        }
        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .btn-confirm {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="p-0 container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2 d-flex align-items-center justify-content-center">
                <div>
                    <div>
                        <!-- X icon to go back to previous page -->
                        <button type="button" class="btn btn-no-outline" onclick="goBack()" style="position: absolute; top: 20px; right: 20px; background-color: white; color: #D4D4D4; font-size: 18px; outline: none;">
                            X
                        </button>
                        <h3 class="text-left font-weight-bold" style="padding-left: 50px; padding-top: 45px; margin-bottom: 20px; font-weight: bold;">Update Supplier's Information</h3>
                        <h5 class="text-left font-weight-semi-bold" style="padding-left: 50px; margin-bottom: 20px; font-weight: bold;">Update the Supplier's Database.</h5>
                    </div>
                    <div class="card-body" style="margin-top: 70px;"> <!-- Add margin-top here -->
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                            </div>
                            <div class="col-md-8" style="margin-left: 50px; padding: 0 20px;"> <!-- Adjust right margin here and add padding -->
                                <form method="post" action="{{ route('layouts.create') }}" id="supplierForm" onsubmit="return validateForm()">

                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Suppliers_ID" style="white-space: nowrap;">Supplier Name: </label>
                                                <input type="text" class="form-control" id="Suppliers_ID" name="Suppliers_ID" placeholder="Enter Supplier Name" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Address" style="white-space: nowrap;">Supplier's Address: </label>
                                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Supplier's Address" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Email" style="white-space: nowrap;">Email: </label>
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Contact" style="white-space: nowrap;">Contact Number: </label>
                                                <input type="text" class="form-control" id="Contact" name="Contact" placeholder="Enter Contact Number" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="category" style="white-space: nowrap;">Category: </label>
                                                <select class="form-control custom-select" id="category" name="category" required style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" placeholder="Category...">
                                                    <option value="Goods">Goods</option>
                                                    <option value="Infrastructure Projects">Infrastructure Projects</option>
                                                    <option value="Consulting Services">Consulting Services</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Rep_Name" style="white-space: nowrap;">Supplier Representative's Name: </label>
                                                <input type="text" class="form-control" id="Rep_Name" name="Rep_Name" placeholder="Enter Representative's Name" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Rep_Contact" style="white-space: nowrap;">Supplier Representative's Contact Number: </label>
                                                <input type="text" class="form-control" id="Rep_Contact" name="Rep_Contact" placeholder="Enter Representative's Contact Number" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label font-weight-bold" for="Rep_Email" style="white-space: nowrap;">Supplier Representative's Email: </label>
                                                <input type="email" class="form-control" id="Rep_Email" name="Rep_Email" placeholder="Enter Representative's Email" style="width: 100%; height: 40px; margin-bottom: 10px; border: 3px solid black;" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <div class="form-group" style="padding-top: 35px;">
                                                <button type="button" class="mr-2 btn btn-primary" style="background-color: black; margin-right: 10px;" onclick="confirmAddSupplier()">Update Supplier</button>
                                                <button type="button" class="btn btn-secondary" style="background-color: #AB830F; color: white;" onclick="clearForm()">Clear Information</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom pop-up containers -->
    <div id="confirmPopup" class="popup-container">
        <div class="popup-content">
            <p>Are you sure you want to update the supplier's information?</p>
            <button class="btn-confirm" onclick="addSupplier()">Confirm</button>
            <button class="btn-cancel" onclick="hidePopup('confirmPopup')">Cancel</button>
        </div>
    </div>

    <div id="successPopup" class="popup-container">
        <div class="popup-content">
            <p>The supplier's information has been successfully updated.</p>
            <button class="btn-confirm" onclick="hidePopup('successPopup')">Back</button>
        </div>
    </div>
</body>

<script>
    function clearForm() {
        document.getElementById("supplierForm").reset();
    }

    function goBack() {
        window.history.back();
    }

    function validateForm() {
        // Check if any of the required fields are empty
        var supplierName = document.getElementById('Suppliers_ID').value.trim();
        var supplierAddress = document.getElementById('Address').value.trim();
        var email = document.getElementById('Email').value.trim();
        var contact = document.getElementById('Contact').value.trim();
        var repName = document.getElementById('Rep_Name').value.trim();
        var repContact = document.getElementById('Rep_Contact').value.trim();
        var repEmail = document.getElementById('Rep_Email').value.trim();

        if (supplierName === '' || supplierAddress === '' || email === '' || contact === '' || repName === '' || repContact === '' || repEmail === '') {
            alert('Please fill in all required fields.');
            return false;
        }

        return true;
    }

    function confirmAddSupplier() {
        // Validate form before showing the confirmation pop-up
        if (validateForm()) {
            showPopup('confirmPopup');
        }
    }

    function addSupplier() {
        // Logic to add supplier goes here
        // For demonstration purposes, let's just close the confirmation popup and show the success popup
        hidePopup('confirmPopup');
        showPopup('successPopup');
        clearForm(); // Reset the form after successfully adding the supplier
    }

    function showPopup(popupId) {
        document.getElementById(popupId).style.display = 'block';
    }

    function hidePopup(popupId) {
        document.getElementById(popupId).style.display = 'none';
    }
</script>

@endsection
