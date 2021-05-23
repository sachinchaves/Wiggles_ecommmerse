<div class="wrapper">
    <header>
        <div id="hero">
        <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            <div class="siteContainer row vAlign">
                <div class="col-6-m col-6-l ">
                
                    <div class="content">
                        <h2>Your wait is almost over!</h2>
                        <p>Perfect bandanas for your pet is almost here. Signup now and we will inform you once we are live! We also have a special 15% off for the first 10 customers!</p>
                    </div>
        
                    <div class="formWrapper">
                        <form id="customerForm" action="index.php?controller=pages&action=saveContact" method="post">
                            <div class="fieldsetWrapper">
                                <div class="fieldset">
                                    <!-- <label>First name:</label> -->
                                    <div class="fieldsetContainer">
                                        <input type="text" name="firstName" placeholder="First name" class="required">
                                        <div class="errorMsg">
                                            <p>Please enter your name</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset">
                                    <!-- <label>Last name:</label> -->
                                    <div class="fieldsetContainer">
                                        <input type="text" name="lastName" placeholder="Last name" class="required">
                                        <div class="errorMsg">
                                            <p>Please enter your last name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldsetWrapper">
                                <div class="fieldset">
                                    <!-- <label>Instagram Username:</label> -->
                                    <div class="fieldsetContainer">
                                        <input type="text" name="instaUsername" placeholder="Instagram Username" class="required">
                                        <div class="errorMsg">
                                            <p>Please enter your instagram username</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset">
                                    <!-- <label>Email:</label> -->
                                    <div class="fieldsetContainer">
                                        <input type="text" name="email" placeholder="Email" class="required">
                                        <div class="errorMsg">
                                            <p>Please enter your email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" submitWrapper">
                                <input class="cta-primary submitBtn" type="submit" value="Yes, subscribe me to this list">
                            </div>
                        </form>
                    </div>
                    
                    <div class="social col-12-s col-12-m col-6-l">
                        <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="hide-s col-6-m col-6-l">
                    <div class="imgContainer">
                        <img src="imgs/dogblob.png" alt="image of a dog">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <?=$this->state["featuredProduct"]?>
    </section>
    <section>
        <div id="features">

            <div class="siteContainer row vAlign">
                <div class="boxOne col-6-m col-6-l hide-s">
                    <div class="imgContainer">
                        <img src="imgs/bandanablob.png" alt="image of a bandana">
                    </div>
                </div>
                <div class="boxTwo col-6-m col-6-l">
                    <div class="content">
                        <h2>Perfect Bandana’s do exist!</h2>
                        <p>
                            Luxurious handmade bandanas speacially made with love for your pet is on it way! These are one of a kind, and crafted to meet your needs. 
                        </p>
                        <ul>
                            <li><i class="fas fa-check"></i> Premium Quality</li>
                            <li><i class="fas fa-check"></i> Safe</li>
                            <li><i class="fas fa-check"></i> Easy to Wash</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="imgContainer peep hide-s">
                <img src="imgs/cat.png" alt="">
            </div>
        </div>
    </section>

    <section>
        <?=$this->state["topProducts"]?>
    </section>
    <section>
        <div id="subscribe">
            <div class="siteContainer">
                <div class="content">
                    <h2>Get added to the list now!</h2>
                    <a href="#hero" class="cta-primary">Subscribe Now</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footerWrapper">
            <div class="siteContainer">
                <p>&copy; 2021 Wiggles</p>
            </div>
        </div>
    </footer>
</div>
<script src="js/main.js" ></script>
