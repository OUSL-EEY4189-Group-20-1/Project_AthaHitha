function editProfile() {
  // Store the original values before editing
  const basicInfo = document.getElementById("basicInfo");
  originalName = basicInfo.querySelector("p:nth-of-type(1)").innerText.split(": ")[1];
  originalEmail = basicInfo.querySelector("p:nth-of-type(2)").innerText.split(": ")[1];
  originalPhone = basicInfo.querySelector("p:nth-of-type(3)").innerText.split(": ")[1];
  originalAddress = basicInfo.querySelector("p:nth-of-type(4)").innerText.split(": ")[1];

  // Hide the basicInfo div
  document.getElementById("basicInfo").style.display = "none";

  // Show the editForm div
  document.getElementById("editForm").style.display = "block";

  // Populate the form fields with existing data
  document.getElementById("name").value = originalName;
  document.getElementById("email").value = originalEmail;
  document.getElementById("phone").value = originalPhone;
  document.getElementById("address").value = originalAddress;
}

function cancelEdit() {
  // Show the basicInfo div
  document.getElementById("basicInfo").style.display = "block";

  // Hide the editForm div
  document.getElementById("editForm").style.display = "none";
}
 
function saveProfile(event) {
  event.preventDefault();

  // Get the form data
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const address = document.getElementById("address").value;

  // Update the basicInfo div with the new data
  const basicInfo = document.getElementById("basicInfo");
  basicInfo.querySelector("p:nth-of-type(1)").innerHTML = `<strong class="info-label" id="infoname">Name:</strong> ${name}`;
  basicInfo.querySelector("p:nth-of-type(2)").innerHTML = `<strong class="info-label" id="infoemail">Email:</strong> ${email}`;
  basicInfo.querySelector("p:nth-of-type(3)").innerHTML = `<strong class="info-label" id="infophone">Phone No:</strong> ${phone}`;
  basicInfo.querySelector("p:nth-of-type(4)").innerHTML = `<strong class="info-label" id="infoaddress">Address:</strong> ${address}`;

  // Hide the editForm div
  document.getElementById("editForm").style.display = "none";

  // Show the basicInfo div
  basicInfo.style.display = "block";
}


document.addEventListener('DOMContentLoaded', function () {
  const viewDetailsBtn = document.querySelector('.view-details-btn');
  const popupDialog = document.querySelector('.popup-dialog');
  const closeBtn = document.querySelector('.close-btn');

  viewDetailsBtn.addEventListener('click', function () {
      popupDialog.style.display = 'block';
  });

  closeBtn.addEventListener('click', function () {
      popupDialog.style.display = 'none';
  });

  // Close the popup when clicking outside the popup box
  document.addEventListener('click', function (event) {
      if (!popupDialog.contains(event.target) && event.target !== viewDetailsBtn) {
          popupDialog.style.display = 'none';
      }
  });
});







//popup
// Reset the dialog to its initial state
function resetDialog() {
  var editField = document.getElementById("editField");
  var saveButton = document.getElementById("savebutton");
  var editMessage = document.getElementById("editmessage");
  
  editField.value = '';
  editField.style.display = "block";
  saveButton.style.display = "block";
  editMessage.style.display = "none";
}


function openEditDialog(field) {
  var dialog = document.getElementById("editDialog");
  var editField = document.getElementById("editField");
  var dialogheader = document.getElementById("dialog-header");
  var saveButton = document.getElementById("savebutton");
  var editMessage = document.getElementById("editmessage");

  resetDialog();

  switch (field) {
    case 'name':
      editField.placeholder = "Enter new name";
      dialogheader.textContent = "Edit Name";
      saveButton.textContent = 'Save';
      break;
    case 'email':
      editField.style.display = "none";
      dialogheader.textContent = "Email";
      saveButton.style.display = "none";
      editMessage.style.display = "block";
      editMessage.textContent = "Your Athahitha Profile has been created based on your Email. If you need to change the Email, please sign out from your profile & register with the new Email address";
      editMessage.style.marginTop = "5%"
      break;
    case 'phone':
      editField.placeholder = "Enter new phone number";
      dialogheader.textContent = "Edit Phone No";
      saveButton.textContent = 'Verify';
      break;
    case 'address':
      editField.placeholder = "Enter new address";
      dialogheader.textContent = "Edit Address";
      saveButton.textContent = 'Save';
      break;
    default:
      editField.placeholder = "Enter new value";
      saveButton.textContent = 'Save';
      break;
  }

  editField.value = ''; 
  var saveButton = document.getElementById("savebutton");
  saveButton.classList.add('no-hover'); 
  dialog.style.display = "block";
}

function closeEditDialog() {
  var dialog = document.getElementById("editDialog");
  var seconddialog = document.getElementById("secondDialog");
  var editField = document.getElementById("editField");
  var saveButton = document.getElementById("savebutton");
  
  editField.value = ''; 
  saveButton.classList.add('no-hover'); 

  var warningText = document.getElementById("warningText");
  warningText.textContent = '';
  editField.style.border = '1px solid black'; 
  dialog.style.display = "none";
  seconddialog.style.display = "none";
}

function saveDetails() {
  var dialog = document.getElementById("editDialog");
  var newValue = document.getElementById("editField").value;
  var dialogHeader = document.getElementById("dialog-header");
  var fieldBeingEdited = dialogHeader.textContent.toLowerCase();

  var warningText = document.getElementById("warningText");
  var editField = document.getElementById("editField");
  var saveButton = document.getElementById("savebutton");

  switch (fieldBeingEdited) {
    case 'edit name':
      if (newValue.trim() === '') {
        warningText.textContent = 'Name cannot be empty';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      if (!/^[a-zA-Z\s]*$/.test(newValue)) {
        warningText.textContent = 'Name cannot contain symbols or numbers';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      editField.style.border = '1px solid black'; 
      break;
     case 'edit email':
      if (saveButton.textContent === 'Verify') {
      
        if (/\S+@\S+\.\S+/.test(newValue)) {
            dialog.style.display = "none"; 
            var secondDialog = document.getElementById("secondDialog");
            secondDialog.style.display = "block"; 
            return;
        }
    }
      if (newValue.trim() === '') {
        warningText.textContent = 'Email cannot be empty';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
  
      if (!/\S+@\S+\.\S+/.test(newValue)) {
        warningText.textContent = 'Please enter a valid email address';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      editField.style.border = '1px solid black'; 
      break;
    case 'edit phone no':
      if (saveButton.textContent === 'Verify') {
    
        if (/^0\d{9}$/.test(newValue)) {
            dialog.style.display = "none"; 
            var secondDialog = document.getElementById("secondDialog");
            secondDialog.style.display = "block"; 
            return;
        }
    }
      if (newValue.trim() === '') {
        warningText.textContent = 'Phone number cannot be empty';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      if (!/^0\d{9}$/.test(newValue)) {
        warningText.textContent = 'Please enter a valid phone number';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      editField.style.border = '1px solid black'; 
      break;
    case 'edit address':
      if (newValue.trim() === '') {
        warningText.textContent = 'Address cannot be empty';
        warningText.style.color = 'red';
        editField.style.border = '1px solid red';
        return;
      }
      editField.style.border = '1px solid black'; 
      break;
    default:
      break;
  }


  switch (fieldBeingEdited) {
    case 'edit name':
      var nameField = document.getElementById("infoname");
      nameField.nextSibling.textContent = " " + newValue;
      break;
    case 'edit email':
      break;
    case 'edit phone no':
      var phoneField = document.getElementById("infophone");
      phoneField.nextSibling.textContent = " " + newValue;
      break;
    case 'edit address':
      var addressField = document.getElementById("infoaddress");
      addressField.nextSibling.textContent = " " + newValue;
      break;
    default:
      break;
  }

  

  editField.value = '';
  saveButton.classList.add('no-hover'); 


  warningText.textContent = ''; 
  dialog.style.display = "none";

}
document.getElementById("editField").addEventListener("input", function() {
  var saveButton = document.getElementById("savebutton");
  saveButton.classList.remove('no-hover'); 

  var warningText = document.getElementById("warningText");
  warningText.textContent = ''; 

  var editField = document.getElementById("editField");
  editField.style.border = '1px solid black'; 
});



//mobile otp
const OTPinputs = document.querySelectorAll('#secondDialog input[type="text"]');
const button = document.querySelector('#otpbtn');
const closeBtn = document.querySelector('.verifyclose');
const otpForm = document.querySelector('#secondDialog form');


const resetForm = () => {
    OTPinputs.forEach(input => {
        input.value = '';
        input.setAttribute('disabled', true);
    });
    button.classList.remove('active');
};


window.onload = () => OTPinputs[0].focus();


OTPinputs.forEach((input) => {
    input.addEventListener('input', () => {
        const currentInput = input;
        const nextInput = currentInput.nextElementSibling;

        // Allow only numeric digits
        currentInput.value = currentInput.value.replace(/[^0-9]/g, '');

        if (nextInput !== null && nextInput.hasAttribute('disabled') && currentInput.value !== "") {
            nextInput.removeAttribute('disabled');
            nextInput.focus();
        }

        if (!OTPinputs[3].disabled && OTPinputs[3].value !== "") {
            button.classList.add("active");
        } else {
            button.classList.remove('active');
        }
    });

    input.addEventListener('keyup', (e) => {
        if (e.key === "Backspace") {
            if (input.previousElementSibling !== null) {
                e.target.value = "";
                e.target.setAttribute("disabled", true);
                input.previousElementSibling.focus();
            }
        }
    });
});


closeBtn.addEventListener('click', () => {
    otpForm.reset();
});


window.addEventListener('beforeunload', () => {
    resetForm();
});
