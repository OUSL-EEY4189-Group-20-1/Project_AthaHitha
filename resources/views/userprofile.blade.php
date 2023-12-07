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



</head>

<body>
    <!--Navigation bar-->
    <section id="sectionTop">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                        src="{{ URL('images-userprofile/logo1Black.png') }}" width="185" height="48" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Programmes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                Donations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Donate Money</a></li>
                                <li><a class="dropdown-item" href="#">Donate Good</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></a> </li>
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
                        <img id="profile-pic" src="{{ URL('images-userprofile/profilepic.png') }}" alt="Profile Image">
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
                <h2 class="hello">Hello</h2>
                <p class="help_sent">This is your profile page.You can see the<br>
                    progress you have made with us here</p>
                <!-- <button id="editButton" onclick="editProfile()">Edit Profile</button> -->
            </div>
        </div>


        <div id="basicInfo">
            <h2 class="BasicInfo">Basic Info</h2>
            <div class="name-div">
                <p><strong class="info-label" id="infoname">Name:</strong> Your Name</p>
                <svg onclick="openEditDialog('name')" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
            </div>
            <hr>
            <div class="email-div">
                <p><strong class="info-label" id="infoemail">Email:</strong> Your Email</p>
                <svg onclick="openEditDialog('email')" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg>
            </div>
            <hr>
            <div class="phone-div">
                <p><strong class="info-label" id="infophone">Phone No:</strong> Your Phone No</p>
                <svg onclick="openEditDialog('phone')" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
            </div>
            <hr>
            <div class="address-div">
                <p><strong class="info-label" id="infoaddress">Address:</strong> Your Address </p>
                <svg onclick="openEditDialog('address')" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
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
                        <div class="donations_done">
                            <!-- details should be update according to the donations done by user. -->
                            <div class="donated_amount">
                                <p><strong>5000</strong> <sub
                                        style="font-size: 10px; font-weight: 750; font-family: serif;">LKR</sub></p>
                            </div>
                            <p>Category</p>
                            <p>|</p>
                            <div class="date">
                                <p style="margin-right: 3px;">Date</p>
                                <p>:</p>
                                <p style="margin-left: 3px;">yyyy/mm/dd</p>
                            </div>

                        </div>
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
            <div class="scroll-box-volunteer">
                <div class="yourvolunteer">
                    <h2>Your Volunteer Activities</h2>
                    <div class="activity">
                        <!-- when user registered for an  volunteer activity and after the date of the activity done
                        new activity box created including thankyou letter or certificate. But the participation
                        should be confirm during the volunteer activity to add that activity box. -->
                    </div>
                </div>
            </div>
        </div>



        <script src="{{ asset('js/userprofile.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
            </script>

        <script>
            let cropper; // Declare cropper variable outside the functions

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

        </script>

        <script src="{{ asset('cropper js/cropper.min.js') }}"></script>
        <script src="{{ asset('cropper js/cropper.js') }}"></script>



</body>

</html>