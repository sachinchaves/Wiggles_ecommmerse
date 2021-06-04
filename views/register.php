<div id="register" class="wrapper">
    <div class="siteContainer">
        <div class="formcontainer">
            <div class="logoContainer">
            <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            </div>
            <h2>Register</h2>

            <form method="post" action="index.php?controller=pages&action=processRegister">
                
                <div class="accountInfo">
                    <h3>Account Information</h3>
                    <div class="fieldset">
                        <label for="firstName">First Name</label>
                        <input type="text" placeholder="First Name" name="firstName"/>
                    </div>
                    <div class="fieldset">
                        <label for="lastName">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lastName"/>
                    </div>
                    <div class="fieldset">
                        <label for="username">Mobile</label>
                        <input type="text" placeholder="Mobile Number" name="phone"/>
                    </div>
                    <div class="fieldset">
                        <label for="username">Email</label>
                        <input type="text" placeholder="Email" name="username"/>
                    </div>
                    <div class="fieldset">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password"/>
                    </div>
                    <div class="fieldset">
                        <label for="confPassword">Confirm Password</label>
                        <input type="password" placeholder="Password" name="confPassword"/>
                    </div>
                </div>
                
                <div class="shippingAdd">
                    <h3>Shipping Address</h3>
                    <div class="fieldset address">
                        <label for="address">Address</label>
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
                        <input type="text" placeholder="Country" name="country"/>
                    </div>
                    <div class="fieldset">
                        <input type="submit" value="Sign Up" class="cta-primary" />
                    </div>
                </div>
                <p>Already a registered user? <a href="index.php?controller=pages&action=login">Login</a></p>
            </form>
        </div>
    </div>
</div>
