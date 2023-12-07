document
  .getElementById("CardNumber")
  .addEventListener("input", function (event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, "");

    if (value.length > 0) {
      value = value.match(new RegExp(".{1,4}", "g")).join(" - ");
    }

    input.value = value;
  });

document
  .getElementById("ExpiryDate")
  .addEventListener("input", function (event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, "");
    if (value.length > 2) {
      value = value.slice(0, 2) + "/" + value.slice(2);
    }

    input.value = value;
  });

document.getElementById("Amount").addEventListener("input", function (event) {
  let input = event.target;
  let value = input.value.replace(/[^0-9]/g, "");
  if (value !== "") {
    value = "LKR " + Number(value).toLocaleString();
  }

  input.value = value;
});

function toggleCardPreviews() {
  var cardPreviewContainer = document.querySelector(".cvc-preview-container");
  cardPreviewContainer.classList.toggle("hide");
}
document
  .getElementById("SecurityCode")
  .addEventListener("input", function (event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, "");

    if (value.length > 3) {
      value = value.slice(0, 3);
    }

    input.value = value;
  });
