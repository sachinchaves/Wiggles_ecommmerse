
<div id="paymentOptions">
    <div class="box siteContainer">
        <div class="logoContainer">
            <a href="index.php?controller=pages&action=default"><h1 class="logo">Wiggles | The Pet Bandana shop</h1></a>
        </div>
        <h2>Payment Information</h2>
        <form action="index.php?controller=cart&action=completePayment" method="POST" id="paymentForm">
            <div class="fieldset">
                <label for="nameOnCard">Name on Credit Card</label>
                <input type="text" placeholder="First Name" name="nameOnCard" class="required" />
                <div class="errorMsg">
                    <p>Please enter name on Credit card</p>
                </div>
            </div>
            <div class="fieldset">
                <label for="cardNumber">Credit Card Number</label>
                <input type="number" placeholder="4242 4242 4242" name="cardNumber" class="required" />
                <div class="errorMsg">
                    <p>Please enter the credit card number</p>
                </div>
            </div>
            <div class="fieldset">
                <label for="expiry">Expires on</label>
                <select name="month" id="expiryMonth">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <select name="year" id="expiryYear">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>
            </div>
            <div class="fieldset">
                <label for="cvv">CVV</label>
                <input type="number" placeholder="4242" name="cvv" class="required" />
                <div class="errorMsg">
                    <p>Please enter CVV</p>
                </div>
                <!-- <small>What is CVV?</small> -->
            </div>
            <div class="fieldset submitWrapper">
                <input type="submit" class="cta-primary submitBtn" value="Pay Now" />
            </div>
        </form>
    </div>
</div>
<script src="js/main.js"></script>