
<div class="wrapper" id="login">
    <div class="siteContainer">
        <div  class="formcontainer">
        <a href="index.php?controller=pages&action=default"><h1 class="logo">Wiggles | The Pet Bandana shop</h1></a>
            <h2>Login</h2>

            <form method="post" action="index.php?controller=pages&action=processLogin" id="customerForm">
                <input type="hidden" name="loginType" value="customers">
                <div class="fieldset">
                    <label for="username">Email</label>
                    <input type="email" placeholder="Username" name="username" class="required" />
                    <div class="errorMsg">
                        <p>Please enter your email</p>
                    </div>
                </div>
                <div class="fieldset">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" name="password" class="required" />
                    <div class="errorMsg">
                        <p>Please enter your password</p>
                    </div>
                </div>
                <div class="fieldset submitWrapper">
                    <input type="submit" value="Login Now" class="cta-primary submitBtn" />
                </div>
                <p>Don't have an account? <a href="index.php?controller=pages&action=register">Register</a></p>
            </form>
        </div>
    </div>
</div>
<script src="js/main.js"></script>