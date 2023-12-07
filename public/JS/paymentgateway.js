// document
//   .getElementById("cardNumber")
//   .addEventListener("input", function (event) {
//     let input = event.target;
//     let value = input.value.replace(/\D/g, "");

//     if (value.length > 0) {
//       value = value.match(new RegExp(".{1,4}", "g")).join(" - ");
//     }

//     input.value = value;
//   });
document
  .getElementById("expiryDate")
  .addEventListener("input", function (event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, "");
    if (value.length > 2) {
      value = value.slice(0, 2) + "/" + value.slice(2);
    }

    input.value = value;
  });
// document
//   .getElementById("donationAmount")
//   .addEventListener("input", function (event) {
//     let input = event.target;
//     let value = input.value.replace(/[^0-9]/g, "");
//     if (value !== "") {
//       value = "LKR " + Number(value).toLocaleString();
//     }

//     input.value = value;
//   });

// document.addEventListener("DOMContentLoaded", function () {
//   const expiryDateInput = document.getElementById("expiryDate");
//   const calendarIcon = document.getElementById("calendarIcon");

//   flatpickr("#expiryDate", {
//     dateFormat: "m/Y",
//     onClose: function (selectedDates, dateStr, instance) {
//       const formattedDate = formatDateForExpiry(dateStr);
//       expiryDateInput.value = formattedDate;
//     },
//   });

//   calendarIcon.addEventListener("click", function () {
//     expiryDateInput._flatpickr.open();
//   });

//   function formatDateForExpiry(selectedDate) {
//     const [month, year] = selectedDate.split("/");
//     return `${month}/${year.slice(-2)}`;
//   }
// });


// document
//   .getElementById("expiryDate")
//   .addEventListener("input", function (event) {
//     let input = event.target;
//     let value = input.value.replace(/\D/g, "");
//     if (value.length > 2) {
//       value = value.slice(0, 2) + "/" + value.slice(2);
//     }

//     input.value = value;
//   });

// document
//   .getElementById("donationAmount")
//   .addEventListener("input", function (event) {
//     let input = event.target;
//     let value = input.value.replace(/[^0-9]/g, "");
//     if (value !== "") {
//       value = "LKR " + Number(value).toLocaleString();
//     }

//     input.value = value;
//   });




document.getElementById("cardNumber").addEventListener("input", function (event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, "");
  
    if (value.length > 0) {
      // Insert hyphen after every 4 digits
      value = value.match(new RegExp(".{1,4}", "g")).join("-");
    }
  
    input.value = value;
  });
  

 

