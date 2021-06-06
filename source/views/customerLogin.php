
<div class="wrapper" id="login">
    <div class="siteContainer">
        <div  class="formcontainer">
            <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            <h2>Customer Login</h2>

            <form method="post" action="index.php?controller=pages&action=processLogin">
                <div class="fieldset">
                    <input type="text" placeholder="Email" name="username"/>
                </div>
                <div class="fieldset">
                    <input type="password" placeholder="Password" name="password"/>
                </div>
                <div class="fieldset">
                    <input type="submit" value="Login Now" class="cta-primary" />
                </div>
                <p>Don't have an account? <a href="index.php?controller=pages&action=register">Register</a></p>
            </form>
        </div>
    </div>
</div>
