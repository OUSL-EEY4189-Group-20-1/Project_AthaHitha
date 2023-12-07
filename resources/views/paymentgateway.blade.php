<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="{{ asset('css/paymentgateway.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

    <style>
        body {
            background-image: url(images-paymentgateway/gateway.jpg);
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="left-container">
            <h1>Payment Summary</h1>
            <div class="summary-div">
                <p class="pymnt-catgry">Category: selected category should be display here</p>
                <div class="input-container">
                    <p id="donating-amount"> donating amount should be display here</p>
                </div>

            </div>

            <p class="p">Your contributions make a difference. Thank you for your support.</p>
        </div>
        <div class="right-container">
            <h1>Card Details</h1>
            <form id="paymentForm">

                <label for="cardtype" class="labelcardType">Card Type:</label>
                <div>
                    <input type="radio" id="visa" name="cardtype" value="Visa" />
                    <img src="{{ URL('images-paymentgateway/visa.png') }}" alt="Visa Logo" class="card-logo">
                    <label for="visa" class="labelvisa">Visa</label><br><br>
                    <input type="radio" id="Mastercard" name="cardtype" value="Mastercard" />
                    <img src="{{ URL('images-paymentgateway/mastercard.jpeg') }}" alt="Visa Logo" class="card-logo">
                    <label for="Mastercard">Mastercard</label><br>
                </div>


                <label for="cardNumber" class="labelcardNumber">Card Number:</label>
                <input class="cardNumber" type="text" id="cardNumber" maxlength="19" placeholder="1234-6786-9012-3456"
                    required />



                <label for="expiryDate" id="labelexpiryDate">Expiry Date:</label>

                <input type="text" id="expiryDate" placeholder="MM/YY" maxlength="5" required />



 

                <label for="cvv" id="labelcvv">CVV:</label>
                <span class="hint">This code is a three or four digit number printed on the back or front of credit
                    cards.</span>
                    <div class="cvv-box">
                        <input type="text" id="cvn" maxlength="4" placeholder="123" required />
                        <img src="{{ URL('images-paymentgateway/cvv.jpg') }}" alt="Visa Logo" class="cvv-logo">
                    </div>
                




                <button type="button" onclick="submitPayment()">
                    Submit Donation
                </button>
            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="{{ asset('js/paymentgateway.js') }}"></script>

</body>

</html>