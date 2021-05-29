<?php 
    var_dump($_SESSION["customerId"]);
?>
<div id="register" class="wrapper">
    <div class="formcontainer">
        <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
        <h2>Choose Shipping Address</h2>

        <form method="post" action="index.php?controller=pages&action=processRegister">
            <input type="hidden" name="<?=$_SESSION["customerId"]?>">
            <div class="fieldset">
                <label for="firstName">Address</label>
                <textarea type="text" placeholder="Address" name="address"> </textarea>
            </div>
            <div class="fieldset">
                <label for="lastName">City</label>
                <input type="text" placeholder="City" name="city"/>
            </div>
            <div class="fieldset">
                <label for="province">Province</label>
                <input type="text" placeholder="Province" name="province"/>
            </div>
            <div class="fieldset">
                <label for="postalCode">Postal Code</label>
                <input type="text" placeholder="Postal Code" name="postalCode"/>
            </div>
            <div class="fieldset">
                <label for="country">Country</label>
                <input type="password" placeholder="Country" name="country"/>
            </div>
            <div class="fieldset">
                <input type="submit" value="Continue to payment" class="cta-primary" />
            </div>
            <p>Already a registered user? <a href="index.php?controller=pages&action=login">Login</a></p>
        </form>
    </div>
</div>
