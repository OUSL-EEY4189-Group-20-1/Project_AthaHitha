
   




//phone number 
window.onload = function() {
    document.getElementById("phone").focus();
  }



  



//form validations
const categoriesSelect = document.querySelector('.catogaries');
const categoriesError = document.getElementById('categories-error');
const firstNameInput = document.getElementById('first_name');
const firstNameError = document.getElementById('first_name-error');
const lastNameInput = document.getElementById('last_name');
const lastNameError = document.getElementById('last_name-error');
const emailInput = document.getElementById('email');
const emailError = document.getElementById('email-error');
const phoneInput = document.getElementById('phone');
const phoneError = document.getElementById('phone-error');

//validations for amount
function validateAmount() {
    var amountInput = document.getElementById('amount');
    var amount = amountInput.value;
    var errorDiv = document.getElementById('amount-error');

    if (amount < 50 ) {
        errorDiv.textContent = 'Please enter a valid amount greater than 50 LKR';
        amountInput.classList.add('is-invalid');
    } else {
        errorDiv.textContent = '';
        amountInput.classList.remove('is-invalid');
    }
}


//Amount validation on clicked amount buttons
const amountButtons = document.querySelectorAll('.amountButton');
const amountInput = document.getElementById('amount');
const amountError = document.getElementById('amount-error');

amountButtons.forEach(button => {
    button.addEventListener('click', function() {
        const value = this.textContent.trim().replace(/\s/g, '');
        amountInput.value = value;
        validateAmount(value);
    });
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

//validations for first name
 var nameRegExp = /^[A-Za-z]+$/;

 function validateFirstName(){
     var firstname = document.getElementById('first_name').value;

     if(firstname.length == 0){
         firstNameError.innerHTML = 'Enter your First Name';
         return false;
     }
     if (!nameRegExp.test(firstname)) {
         document.getElementById("first_name-error").innerText = "Should contain only letters";
         return false;
     }
     firstNameError.innerHTML = '';
     return true;

 }

//validations for last name

 function validateLastName(){
     var lastname = document.getElementById('last_name').value;

     if(lastname.length == 0){
         lastNameError.innerHTML = 'Enter your Last Name';
         return false;
     }
     if (!nameRegExp.test(lastname)) {
         document.getElementById("last_name-error").innerText = "Should contain only letters";
         return false;
     }
     lastNameError.innerHTML = '';
     return true;

 }

// validations for email
 
 function validateEmail() {
     const email = emailInput.value;
     const emailRegex = /\S+@\S+\.\S+/; 

     if (!emailRegex.test(email)) {
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

     if (!phonePattern.test(phoneNumber)) {
         phoneError.textContent = 'Please enter a valid phone number starting with 0 and containing 10 digits.';
     } else {
         phoneError.textContent = ''; 
     }
 });




//validation when clicking donate now button
    function validateForm() {
        let isError = false;

        // Resetting previous errors
        document.getElementById('amount-error').innerText = "";
        document.getElementById('categories-error').innerText = "";
        document.getElementById('first_name-error').innerText = "";
        document.getElementById('last_name-error').innerText = "";
        document.getElementById('email-error').innerText = "";

        // Validating amount
        const amount = document.getElementById('amount').value;
        if (amount === "") {
            document.getElementById('amount-error').innerText = "Please enter an Amount.";
            isError = true;
        }
        

        // Validating category dropdown
        const category = document.querySelector('.catogaries').value;
        if (category === "option_choose") {
            document.getElementById('categories-error').innerText = "Please choose a Category.";
            isError = true;
        }

         //Validating first name
         const firstName = document.getElementById('first_name').value;
         if (firstName === "") {
             document.getElementById('first_name-error').innerText = "Please enter your First Name.";
             isError = true;
         }

        //Validating last name
         const lastName = document.getElementById('last_name').value;
         if (lastName === "") {
             document.getElementById('last_name-error').innerText = "Please enter your Last Name.";
             isError = true;
         }

        //validating phone
         const phone = document.getElementById('phone').value;
         if (phone === "") {
             document.getElementById('phone-error').innerText = "Please enter your Phone No.";
             isError = true;
         }

        // Checking if any error occurred
        if (isError) {
            return false; 
        }
        return true; 
    }

    

