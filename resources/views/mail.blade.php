<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">

    <style>
        .background_image {
            background-image: url(images-contactUs/contactUs.png);
        }

        @media (max-width:768px) {
            .background_image {
                background-image: url(images-contactUs/contactUs2.png);

            }
        }
    </style>

</head>

<body>

    <!--Navigation bar-->
    <section id="sectionTop">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                        src="{{ URL('images-contactUs/logo1Black.png') }}" width="185" height="48" /></a>
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
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
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

        <div class="container-fluid">
            <div class="background_image">
                <h1 class="heading">Contact Us</h1>
                <div class="first_box">
                    <div class="second_box">
                        <h4 class="box_heading">We look forward to hearing from you!</h4>
                        <div class="col-md-6 offset-md-1">
                            <form id="myForm" action="{{ route('send_mail') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name" id="name"
                                        aria-describedby="nameHelp" pattern="[A-Za-z ]+"
                                        title="Please enter letters and spaces only" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control email " id="email"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sub" class="form-control help " id="help"
                                        placeholder="How can we help you" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="mess" class="form-control message " id="message"
                                        placeholder="Your Message " rows="5" required></textarea>
                                </div>
                                <div class="col-md-6 offset-md-7 text-center">
                                    <button type="submit" class="btn btn-primary send"
                                        onclick="submitAndReload()">Send</button>
                                </div>
                                <!-- Add this HTML code within your view -->
                                <div class="custom-dialog" id="customDialog">
                                    <div class="dialog-content">

                                        <p id="dialogMessage"></p>
                                        <button id="closeDialog">Close</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <h2 class="address">Athahitha</h2>
                <p class="address_line">Street: 242/A, Ihala Bomiriya<br>City: Kaduwela<br>State/province/area: Colombo
                </p>
                <h2 class="phone">Phone</h2>
                <p class="phone_line">0112539536</p>
                <h2 class="emailaddress">Email</h2>
                <a class="email_line"
                    href="mailto:athahithadonations@gmail.com?subject=Subject%20of%20the%20email&body=Body%20of%20the%20email"
                    style="color: black; text-decoration: none;" target="_blank">athahithadonations@gmail.com</a>
            </div>
        </div>
        <div class="questions">
            <p class="Fre_questions">Frequently Asked Questions</p>
            <div class="container">
                <div class="row">
                    <!-- First Column -->
                    <div class="column1 col-md-6">
                        <p><b>Q: How can I donate to Athahitha? </b><br>
                            A: We are committed to transparency. Your donations are used to fund various
                            programs, such as education, healthcare, community development, disaster relief,
                            and more. We regularly update our website with detailed reports on project outcomes
                            and financials. </p>
                        <p><b>Q: Can I volunteer with Athahitha?</b><br>
                            A: Absolutely! We welcome volunteers who share our passion for helping others. Visit
                            the "Volunteer" section on our website to explore available opportunities and join
                            our dedicated team. </p>
                        <p><b>Q: How can I partner with Athahitha for corporate social responsibility
                                initiatives?</b><br>
                            A: We value partnerships with corporations interested in CSR. Reach out to us through
                            the "Contact Us" page on our website, and our team will be happy to discuss
                            potential collaborations.</p>
                        <p><b>Q: How can I get involved in Athahitha's events and campaigns?</b><br>
                            A: Our events and campaigns offer various opportunities to engage with our cause. Follow us
                            on
                            social media and regularly check our website for updates on upcoming events and how you can
                            participate.</p>
                    </div>

                    <!-- Second Column -->
                    <div class="column2 col-md-6">
                        <p><b>Q: How are my donations utilized? </b><br>
                            A: To donate, simply visit our website and click on the "Donate Now" button. You can
                            choose from various payment methods, and your contribution will directly support
                            our projects and initiatives. </p>
                        <p><b>Q: How can I get updates on Athahitha's work?</b><br>
                            A: Stay informed about our activities by subscribing to our newsletter. You'll
                            receive regular updates on our projects, success stories, events, and ways to get
                            involved.</p>
                        <p><b>Q: Can I sponsor a specific project or beneficiary?</b><br>
                            A: Yes, you can choose to sponsor a particular project or support individual
                            beneficiaries. Please contact us to discuss the options available and how you
                            can make a direct impact. </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ URL('images-contactUs/3 dots.png') }}" alt="End" class="end">
        </div>
        <script>
            // Reset form when the page is reloaded
            window.addEventListener('beforeunload', function () {
                // Assuming the form has an ID of 'myForm', reset the form
                document.getElementById('myForm').reset();
            });

            // Rest of your existing code
            document.getElementById('myForm').addEventListener('submit', function (e) {
                e.preventDefault();

                // Show the custom dialog box with a loading message
                document.getElementById('dialogMessage').textContent = "Sending the message. Please wait...";
                document.getElementById('customDialog').style.display = 'flex';

                // Remove the close button while sending
                document.getElementById('closeDialog').style.display = 'none';

                let formData = new FormData(this);

                // Reset the form
                this.reset();

                // Submit the form data
                fetch("{{ route('send_mail') }}", {
                    method: "POST",
                    body: formData
                })
                    .then(data => {
                        // Clear the dialog message when the email is sent successfully
                        document.getElementById('dialogMessage').textContent = "Message sent successfully!";

                        // Add back the close button when the email is sent successfully
                        document.getElementById('closeDialog').style.display = 'block';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });

            // Close the custom dialog box
            document.getElementById('closeDialog').addEventListener('click', function () {
                document.getElementById('customDialog').style.display = 'none';
            });

        </script>




</body>

</html>