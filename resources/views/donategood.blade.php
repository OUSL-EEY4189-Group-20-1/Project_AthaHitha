<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <title>Donate Good</title>

    <style>
        /* Navigation bar */

        .nav-link {
            color: #269f61;
            font-size: x-large;
            font-weight: 420;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav {
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            text-align: center;
            position: relative;
        }

        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #269f6159;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.5s ease-in-out;
        }

        .navbar-nav .nav-link:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }

        /* end of the nav bar */

        body {
            background-color: rgb(232, 232, 232);
        }


        .contain {
            display: flex;
            justify-content: space-between;
            padding: 120px 20px 120px 20px;
        }

        .description {
            background-color: rgb(255, 255, 255);
            border-radius: 2%;
            width: 49%;
            padding: 5%;
            height: 100%;

        }

        .logo_pic {
            width: 30%;
        }

        .description_image {
            width: 100%;
            margin-top: 5%;
        }

        .about_topic {
            font-size: 150%;
            color: #666666;
            font-weight: 600;
            margin-top: 5%;
        }

        .about_online_donation {
            font-size: 100%;
        }

        .donation_forum {
            background-color: rgb(255, 255, 255);
            border-radius: 2%;
            width: 49%;
            padding: 5%;
            height: auto;
            overflow: hidden;
        }


        /* Form */
        .form_container {
            margin-top: 5%;
        }

        label {
            margin-top: 5%;
        }

        .required-star {
            color: #ff0800;
        }

        .name {
            margin-top: 15px;
            width: 100%;
            padding: 2%;
            border: #0A954E solid 1px;
            border-radius: 0%;
        }

        #name-error,
        #categories-error,
        #Des-error,
        #email-error,
        #phone-error {
            font-size: 14px;
            color: red;
        }

        .catogaries {
            margin-top: 15px;
            width: 100%;
            background-color: #ffffff;
            padding: 2%;
            border: #0A954E solid 1px;
            border-radius: 0%;
        }

        .email {
            margin-top: 15px;
            width: 100%;
            padding: 2%;
            border: #0A954E solid 1px;
            border-radius: 0%;
        }

        #phone {
            margin-top: 15px;
            width: 100%;
            padding: 2%;
            border: #0A954E solid 1px;
            border-radius: 0%;
            outline: 0;
            letter-spacing: 0.05rem;
        }

        #Des {
            margin-top: 15px;
            width: 100%;
            padding: 2%;
            border: #0A954E solid 1px;
            border-radius: 0%;
        }

        input:invalid+#phone-error:after {
            position: absolute;
            content: "";
            padding-left: 1rem;
            color: #ff0800;
            font-size: 1rem;
            line-height: 54px;
            margin-top: 1%;
        }


        #phone:focus {
            outline: 0;
        }

        #phone:valid {
            border-color: #0A954E;
        }

        #phone:focus:invalid {
            border-color: rgba(255, 8, 0, 0.6);
        }

        .donate {
            color: #ffffff;
            background-color: #0A954E;
            border-radius: 10px;
            margin-top: 10%;
            font-size: 120%;
            font-weight: 600;
            padding: 5px 20px;
            border: none;
            margin-bottom: 20px;
        }

        .donate:hover {
            color: #0A954E;
            background-color: #ffffff;
            border: #0A954E solid 2px;
        }

        .note_topic {
            font-size: 120%;
            color: #666666;
            font-weight: 600;
            margin-top: 2%;
        }

        .note {
            font-size: 90%;

        }



        /* Responsive css */
        @media (min-width: 1200px) and (max-width: 1400px) {

            .first_name,
            .last_name {
                width: 197px;
            }
        }

        @media (min-width: 769px) and (max-width: 1200px) {
            .contain {
                padding: 120px 10px 120px 10px;
            }

            .amountButton {
                padding-top: 1%;
                padding-left: 2%;
                padding-right: 2%;
            }

            .first_name,
            .last_name {
                width: 100%;
                padding: 2%;
            }

            .last_name {
                margin-top: 5%;
            }

            .full_name {
                display: flex;
                flex-direction: column;
                margin-top: 15px;
                background-color: #ffffff;

            }

            .first-name-box {
                margin-right: 0%;
            }

        }

        @media (max-width:768px) {
            .contain {
                padding: 120px 20px 120px 20px;
                display: block;
            }

            .description {
                width: 100%;
            }

            .donation_forum {
                width: 100%;
                margin-top: 10%;
            }

            .first_name,
            .last_name {
                width: 100%;
                padding: 2%;
            }

            .last_name {
                margin-top: 5%;
            }

            .full_name {
                display: flex;
                flex-direction: column;
                margin-top: 15px;
                background-color: #ffffff;

            }

            .first-name-box {
                margin-right: 0%;
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
                        src="{{ URL('images-donatemoney/logo1Black.png') }}" width="185" height="48" /></a>
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


        <div class="container-sm contain">
            <div class="description">
                <img src="{{ URL('images-donatemoney/logo1Black.png') }}" alt="logo" class="img-fluid logo_pic">
                <img src="{{ URL('images-donategood/image.jpg') }}" alt="description_image"
                    class="img-fluid description_image">
                <p class="about_topic">About Good Donation</p>
                <p class="about_online_donation">At Athahitha, we believe in the power of
                    giving, and we understand that generosity comes in various forms.
                    That's why we are thrilled to announce our latest feature: the option
                    to donate goods in addition to monetary contributions.

                    <br><br>Our Goods Donation Form is designed to make the process
                    seamless and convenient for you. Simply fill out the form, specifying
                    the details of the goods you wish to donate, and one of our dedicated
                    agents will reach out to you promptly.

                    <br><br>Whether it's clothing, household items, or any other
                    tangible goods, your contributions can make a meaningful impact on
                    the lives of those in need. We are committed to creating a positive
                    change in our communities, and your generosity plays a crucial role
                    in achieving that vision.

                    <br><br>Thank you for choosing Athahitha Donation Application as
                    your platform for making a difference. Together, we can create a
                    world where kindness knows no bounds.
                </p>

            </div>
            <div class="donation_forum">
                <div class="form_container">
                    <form id="myForm">
                        <div class="form-group">
                            <label>Name</label>
                            <span class="required-star">*</span>
                            <input type="text" name="name" class="form-control name" id="name"
                                placeholder="Enter your name" onkeyup="validateName()">
                            <div id="name-error"></div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <span class="required-star">*</span>
                            <input type="email" class="email" id="email" placeholder="Enter your email"
                                onkeyup="validateEmail()">
                            <div id="email-error"></div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <span class="required-star">*</span><br>
                            <input id="phone" type="text" pattern="[0]{1}[0-9]{9}" placeholder="0xxxxxxxxx" />
                            <div id="phone-error"></div>
                        </div>

                        <div class="form-group">
                            <label>Donate To</label>
                            <span class="required-star">*</span>
                            <select name="options" id="options" class="catogaries">
                                <option value="option_choose">Choose</option>
                                <option value="option1">Educational Programme</option>
                                <option value="option">Health Programme</option>
                                <option value="option1">Nutririon Programme</option>
                                <option value="option1">Clean water programme</option>
                            </select>
                            <div id="categories-error"></div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <span class="required-star">*</span><br>
                            <textarea id="Des" type="text" rows="5"
                                placeholder="Description (Your donation, items and quantitiy)"
                                onkeyup="validateDes()"></textarea>
                            <div id="Des-error"></div>
                        </div>
                </div>

                <div class="col-md-6 offset-md-0">
                    <button type="submit" class="btn btn-primary donate " id="donateButton"
                        onclick="validateForm()">Donate</button>
                </div>

                </form>
                <p class="note_topic">Important Note</p>
                <p class="note">When you submit your details by showing your interest to
                    donate goods physically our team will contact you via email and
                    phone within 2-3 working days. We are currently not offering any
                    transportation service to collect your goods and You have to bring
                    them to the nearest center or send them via a courier service.
                </p>

            </div>




        </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.querySelector('.form_container form');

                if (form) {
                    window.onload = function () {
                        form.reset();
                    };
                }
            });
        </script>
        <script>
            // Add an event listener to the donate button
            document.getElementById('donateButton').addEventListener('click', function (event) {
                event.preventDefault(); 
                const formValid = validateForm();
                if (formValid) {
                    //popup url
                }
            });
        
        </script>
        <script>



//form validations
const nameInput = document.getElementById('name');
const nameError = document.getElementById('name-error');
const categoriesSelect = document.querySelector('.catogaries');
const categoriesError = document.getElementById('categories-error');
const emailInput = document.getElementById('email');
const emailError = document.getElementById('email-error');
const phoneInput = document.getElementById('phone');
const phoneError = document.getElementById('phone-error');
const DesInput = document.getElementById('Des');
const DesError = document.getElementById('Des-error');

//validations for name
function validateName(){
    var name = document.getElementById('name').value;
    var nameRegExp = /^[A-Za-z]+$/;


    if(name.length == 0){
        nameError.innerHTML = 'Enter your Name';
        return false;
    }
    if (!nameRegExp.test(name)) {
        document.getElementById("name-error").innerText = "Should contain only letters";
        return false;
    }
    nameError.innerHTML = '';
    return true;

}
// validations for email
 
function validateEmail() {
    const email = emailInput.value;
    const emailRegex = /\S+@\S+\.\S+/; 

    
    if(email.length == 0){
        emailError.innerHTML = 'Enter your Email';
        return false;
    }if (!emailRegex.test(email)) {
        emailError.textContent = 'Please enter a valid email'; 
        return false;
    }

    emailError.textContent = ''; 
    return true;
}
emailInput.addEventListener('input', validateEmail);

//validations for phone number
phoneInput.addEventListener('input', function(event) {
    const phonePattern = /[0]{1}[0-9]{9}/;
    const phoneNumber = event.target.value;

    if (!phonePattern.test(phoneNumber) || phoneNumber.length > 10) {
        phoneError.textContent = 'Please enter a valid phone number starting with 0 and containing 10 digits.';
    } else {
        phoneError.textContent = ''; 
    }
});

//validations for category
function validateCategories() {
    const selectedValue = categoriesSelect.value;

    if (selectedValue === 'option_choose') {
        categoriesError.innerHTML = 'Please choose a category';
        return false;
    }

    categoriesError.innerHTML = '';
    return true;
}

categoriesSelect.addEventListener('change', validateCategories);



//validations for Des
function validateDes(){
    var Des = document.getElementById('Des').value;
   


    if(Des.length == 0){
        DesError.innerHTML = 'Enter the description';
        return false;
    }
    DesError.innerHTML = '';
    return true;
    
    

}



//validation when clicking donate now button
    function validateForm() {
        let isError = false;

        // Resetting previous errors
        document.getElementById('name-error').innerText = "";
        document.getElementById('categories-error').innerText = "";
        document.getElementById('email-error').innerText = "";
        document.getElementById('Des-error').innerText = "";



         // Validating name
         const name = document.getElementById('name').value;
         if (name === "") {
             document.getElementById('name-error').innerText = "Please enter your name.";
             isError = true;
         }
        //validating email
        const email = document.getElementById('email').value;
        if (email === "") {
            document.getElementById('email-error').innerText = "Please enter your Email.";
            isError = true;
        }
        //validating phone
        const phone = document.getElementById('phone').value;
        if (phone === "") {
            document.getElementById('phone-error').innerText = "Please enter your Phone No.";
            isError = true;
        }
        // Validating category dropdown
        const category = document.querySelector('.catogaries').value;
        if (category === "option_choose") {
            document.getElementById('categories-error').innerText = "Please choose a Category.";
            isError = true;
        }
         //Validating description
         const Des = document.getElementById('Des').value;
         if (Des === "") {
             document.getElementById('Des-error').innerText = "Please enter a description.";
             isError = true;
         }
        // Checking if any error occurred
        if (isError) {
            return false; 
        }
        return true; 
    }

        </script>

</body>

</html>