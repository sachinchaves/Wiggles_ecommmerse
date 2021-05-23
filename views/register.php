<div id="register" class="wrapper">
    <div class="formcontainer">
        <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
        <h2>Register</h2>

        <form method="post" action="index.php?controller=pages&action=processRegister">
            <div class="fieldset">
                <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="fieldset">
                <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="fieldset">
                <input type="submit" value="Sign Up" class="cta-primary" />
            </div>
            <p>Already a registered user? <a href="index.php?controller=pages&action=login">Login</a></p>
        </form>
    </div>
</div>
