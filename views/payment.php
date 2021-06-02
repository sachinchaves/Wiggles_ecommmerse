<div id="paymentOptions">
    <div class="box">
        <h2>Payment Information</h2>
        <form action="index.php?controller=cart&action=completePayment" method="POST">
            <div class="fieldset">
                <label for="nameOnCard">Name on Credit Card</label>
                <input type="text" placeholder="First Name" name="nameOnCard"/>
            </div>
            <div class="fieldset">
                <label for="cardNumber">Credit Card Number</label>
                <input type="number" placeholder="4242 4242 4242" name="cardNumber"/>
                <img src="" alt="">
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
                <input type="number" placeholder="4242" name="cvv"/>
                <small>What is CVV?</small>
            </div>
            <div class="fieldset">
                <input type="submit" value="Pay Now" />
            </div>
        </form>
    </div>
</div>