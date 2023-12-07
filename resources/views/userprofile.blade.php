<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('cropper js/cropper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cropper js/cropper.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <title>My Profile</title>
    <style>
        nav.navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 1000;
            /* Set the z-index to a high value */
        }
    </style>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- jQuery (optional, if you choose to use it) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body>
    @auth
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar" style="position: sticky;">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                        src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('userLogin') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories') }}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallary') }}">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </span>

                    <!--Seperate div for profile icon-->
                    <div class="" id="navbarText" style="float: inline-end;">

                        <ul class="nav me-auto mb-2 mb-lg-0">
                            @auth
                                <li class="nav-item"><a class="nav-link active" aria-current="page"
                                        href="{{ route('getMoneyDonations.Details', ['id' => Auth::user()->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg> {{ Auth::user()->first_name }}
                                    </a>
                                </li>
                                <li>

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </div>
        </nav>
        <!--End of navigation bar-->

        <!-- Top Banner -->

        <div class="container-fluid">
            <div class="background">
                <!-- Background Image -->
                <img src="{{ URL('images-userprofile/TopBanner.png') }}" alt="Background Image">

                <!-- Profile Image -->
                <div class="profile-container">
                    <div class="profile-image">
                        <img id="profile-pic" src="data:image/png;base64,{{ Auth::user()->profile_picture_url }}"
                            alt="Profile Image">
                    </div>
                    <div class="camera-icon" onclick="changeProfilePic()">
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
                <input type="file" id="upload-input" style="display:none" accept="image/*">

                <!-- Cropper Modal -->
                <div id="cropper-modal" class="modal" style="display:none">
                    <div class="modal-content">
                        <div class="cropper-container">
                            <img id="cropper-image" src="" alt="Crop Image">
                        </div>
                        <button onclick="cropImage()">Upload</button>
                    </div>
                </div>


            </div>
            <div class="intro">
                <h2 class="hello">Hello {{ Auth::user()->first_name }}</h2>
                <p class="help_sent">This is your profile page.You can see the<br>
                    progress you have made with us here</p>
                <!-- <button id="editButton" onclick="editProfile()">Edit Profile</button> -->
            </div>
        </div>


        <div id="basicInfo">
            <h2 class="BasicInfo">Basic Info</h2>
            <div class="name-div">
                <p><strong class="info-label" id="infoname">First Name:</strong><span
                        id="changed-f-name">{{ Auth::user()->first_name }}</span></p>
                <svg onclick="openEditDialog('name')" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
                <div id="editDialog" class="dialog">
                    <span onclick="closeEditDialog()" class="close">&times;</span>
                    <div class="dialog-content">
                        <h2 id="dialog-header">Edit Name</h2>
                        <div id="editmessage"></div>
                        <input type="text" id="editField" placeholder="Enter new name">
                        <div id="warningText" style="color: red;"></div>
                        <button id="savebutton" class="no-hover" onclick="saveName()">Save</button>
                    </div>
                </div>
                <script>
                    function openEditDialog(field) {
                        // Logic to open the dialog for editing the name
                        // Display the dialog
                        document.getElementById('editDialog').style.display = 'block';
                    }

                    function closeEditDialog() {
                        document.getElementById('editDialog').style.display = 'none';
                    }

                    function saveName() {
                        const newName = document.getElementById('editField').value;

                        // Send the updated name to the backend using AJAX
                        fetch('/update-first-name', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    name: newName
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data); // For demonstration purposes
                                // Assuming the update was successful, update the displayed name in the UI
                                document.getElementById('changed-f-name').innerText = newName;
                                closeEditDialog(); // Close the dialog after successful update
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    }
                </script>
                <hr>
            </div>

            <hr>
            <div class="email-div">
                <p><strong class="info-label" id="infoemail">Email:</strong>{{ Auth::user()->email }}</p>
                <svg onclick="openEditDialog('email')" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg>
            </div>
            <hr>
            <div class="phone-div">
                <p><strong class="info-label" id="infophone">Phone No:</strong>{{ Auth::user()->contact }}</p>
                <svg onclick="openEditDialogPhone('phone')" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
                <div id="editDialogPhone" class="dialog">
                    <span onclick="closeEditDialogPhone()" class="close">&times;</span>
                    <div class="dialog-content">
                        <h2 id="dialog-headerPhone">Edit Phone Number</h2>
                        <div id="editmessagePhone"></div>
                        <input type="text" id="editFieldPhone" placeholder="Enter new phone number">
                        <div id="warningTextPhone" style="color: red;"></div>
                        <button id="savebuttonPhone" class="no-hover" onclick="savePhoneNumber()">Save</button>
                    </div>
                </div>
                <script>
                    function openEditDialogPhone(field) {
                        // Logic to open the dialog for editing the name
                        // Display the dialog
                        document.getElementById('editDialogPhone').style.display = 'block';
                    }

                    function closeEditDialogPhone() {
                        document.getElementById('editDialogPhone').style.display = 'none';
                    }

                    function savePhoneNumber() {
                        const newPhoneNumber = parseInt(document.getElementById('editFieldPhone').value);

                        fetch('/update-phone-number', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    phone: newPhoneNumber
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                document.getElementById('changed-phone').innerText = newPhoneNumber;
                                closeEditDialogPhone();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    }
                </script>
            </div>
            <hr>
            <div class="address-div">
                <p><strong class="info-label" id="infoaddress">Address:</strong><span
                        id="newAdd">{{ Auth::user()->address }} </span></p>
                <svg onclick="openEditDialogAddress()" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
                <div id="editDialogAddress" class="dialog">
                    <span onclick="closeEditDialogAddress()" class="close">&times;</span>
                    <div class="dialog-content">
                        <h2 id="dialog-headerAddress">Edit Address</h2>
                        <div id="editmessageAddress"></div>
                        <input type="text" id="editFieldAddress" placeholder="Enter new address">
                        <div id="warningTextAddress" style="color: red;"></div>
                        <button id="savebuttonAddress" class="no-hover" onclick="saveAddress()">Save</button>
                    </div>
                </div>
                <hr>
                <script>
                    function openEditDialogAddress() {
                        document.getElementById('editDialogAddress').style.display = 'block';
                    }

                    function closeEditDialogAddress() {
                        document.getElementById('editDialogAddress').style.display = 'none';
                    }

                    function saveAddress() {
                        const newAddress = document.getElementById('editFieldAddress').value;

                        fetch('/update-address', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    address: newAddress
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                document.getElementById('newAdd').innerText = newAddress;
                                closeEditDialogAddress();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    }
                </script>
            </div>

            <hr>
        </div>

        <div id="editDialog" class="dialog">
            <span onclick="closeEditDialog()" class="close">&times;</span>
            <div class="dialog-content">
                <h2 id="dialog-header">Edit Details</h2>
                <div id="editmessage"></div>
                <input type="text" id="editField" placeholder="Enter new value">
                <div id="warningText" style="color: red;"></div>
                <button id="savebutton" class="no-hover" onclick="saveDetails()"></button>
            </div>

        </div>


        <div id="secondDialog" class="secondDialog">
            <div class="seconddialog-content">
                <span onclick="closeEditDialog()" class="verifyclose">&times;</span>
                <h4>Verify Phone Number</h4>
                <p>Please enter the OTP you received via SMS to confirm the ownership of
                    your mobile number</p>
                <form action="#">
                    <div class="input_fields">
                        <input id="otpinput" type="text" maxlength="1">
                        <input id="otpinput" type="text" disabled maxlength="1">
                        <input id="otpinput" type="text" disabled maxlength="1">
                        <input id="otpinput" type="text" disabled maxlength="1">
                    </div>

                    <button id="otpbtn">Verify OTP</button>
                </form>
            </div>
        </div>




        <div class="donate_volunteer">
            <div class="scroll-box-donations">
                <div class="yourdonations">
                    <h2>Your Donations</h2>
                    <div>

                        @foreach ($info as $i)
                            <div class="donations_done">
                                <!-- details should be update according to the donations done by user. -->
                                <div class="donated_amount">
                                    <p>{{ $i->amount }} LKR</p>
                                </div>
                                <p style="font-size: 15px">{{ $i->category }}</p>
                                <div class="date">
                                    <p style="margin-right: 3px;font-size: 15px">{{ $i->created_at }}</p>
                                </div>

                            </div>
                        @endforeach


                        <div class="donations_done_smallscreen">
                            <!-- details should be update according to the donations done by user -->
                            <div class="donated_amount">
                                <p style="text-align: center;"><strong>5000/=</strong></p>

                            </div>
                            <button class="view-details-btn">View</button>
                        </div>


                        <!-- Popup Dialog Box -->
                        <div class="popup-dialog">
                            <!-- Popup content goes here -->
                            <div class="popup-content">
                                <!-- Donation details and close button -->
                                <p class="category"><strong>Category :</strong> category</p>
                                <p><strong>Amount: </strong> 5000 LKR</p>

                                <div class="date">
                                    <p style="margin-right: 3px;"><strong>Date :</strong> yyyy/mm/dd</p>
                                </div>
                                <button class="close-btn">Close</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <script src="{{ asset('js/userprofile.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>

        <script>
            /*    let cropper; // Declare cropper variable outside the functions

                            // Function to open the file dialog when camera icon is clicked
                            function changeProfilePic() {
                            document.getElementById('upload-input').click();
                        }

                            // Function to handle the selected image and open the cropper modal
                            document.getElementById('upload-input').addEventListener('change', function (e) {
                            const input = e.target;
                            if (input.files && input.files[0]) {
                            const reader = new FileReader();

                            reader.onload = function (e) {
                            document.getElementById('cropper-image').src = e.target.result;
                            openCropperModal();
                        };

                            reader.readAsDataURL(input.files[0]);
                        }
                        });

                            // Function to open the cropper modal
                            function openCropperModal() {
                            const modal = document.getElementById('cropper-modal');
                            modal.style.display = 'block';

                            // Initialize Cropper.js with minCropBoxWidth and minCropBoxHeight options
                            cropper = new Cropper(document.getElementById('cropper-image'), {
                            aspectRatio: 1, // Set your desired aspect ratio
                            viewMode: 1,
                            minCropBoxWidth: 300, // Set your desired minimum width
                            minCropBoxHeight: 300, // Set your desired minimum height
                        });
                        }


                            function cropImage() {
                            const canvas = cropper.getCroppedCanvas();
                            const croppedImage = canvas.toDataURL('image/png');

                            // Update profile picture
                            const profilePic = document.getElementById('profile-pic');
                            profilePic.src = croppedImage;

                            // Destroy the cropper instance
                            cropper.destroy();

                            // Close cropper modal
                            const cropperModal = document.getElementById('cropper-modal');
                            cropperModal.style.display = 'none';
                        }
                        */
            let cropper;

            // Function to open the file dialog when camera icon is clicked
            function changeProfilePic() {
                document.getElementById('upload-input').click();
            }

            document.getElementById('upload-input').addEventListener('change', function(e) {
                const input = e.target;
                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        document.getElementById('cropper-image').src = e.target.result;
                        openCropperModal();
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            });

            function openCropperModal() {
                const modal = document.getElementById('cropper-modal');
                modal.style.display = 'block';

                cropper = new Cropper(document.getElementById('cropper-image'), {
                    aspectRatio: 1,
                    viewMode: 1,
                    minCropBoxWidth: 300,
                    minCropBoxHeight: 300,
                });
            }

            function cropImage() {
                const canvas = cropper.getCroppedCanvas();
                const croppedImage = canvas.toDataURL('image/png');

                fetch('{{ route('upload.profile.pic') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            croppedImage: croppedImage
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            console.log('Profile picture uploaded successfully.');
                            const profilePic = document.getElementById('profile-pic');
                            profilePic.src = croppedImage; // Update image on the page
                            closeCropperModal();
                        } else {
                            console.error('Failed to upload profile picture.');
                            // Handle upload failure
                        }
                    })
                    .catch(error => {
                        console.error('Error uploading profile picture:', error);
                    });
            }

            function closeCropperModal() {
                cropper.destroy();
                const modal = document.getElementById('cropper-modal');
                modal.style.display = 'none';
            }
        </script>
        <script src="{{ asset('cropper js/cropper.min.js') }}"></script>
        <script src="{{ asset('cropper js/cropper.js') }}"></script>
    @endauth


    @if (session('success'))
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script to automatically open the modal on page load -->
        <script>
            // Use jQuery or vanilla JavaScript to trigger the modal on page load
            // This example uses jQuery
            $(document).ready(function() {
                $('#exampleModalCenter').modal('show');
            });
        </script>
    @endif

    @if (session('error'))
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script to automatically open the modal on page load -->
        <script>
            // Use jQuery or vanilla JavaScript to trigger the modal on page load
            // This example uses jQuery
            $(document).ready(function() {
                $('#exampleModalCenter').modal('show');
            });
        </script>
    @endif

</body>

</html>
