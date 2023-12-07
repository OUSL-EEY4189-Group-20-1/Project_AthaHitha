
   




//phone number 
window.onload = function() {
    document.getElementById("phone").focus();
  }



  



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

    

