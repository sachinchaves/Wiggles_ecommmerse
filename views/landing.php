<div id="landing">
    <div class="wrapper">
        <header>
            <div id="hero">
                <div class="siteContainer row vAlign">
                    <div class="col-12-s col-6-m col-6-l ">
                    
                        <div class="content">
                            <h2>Pampering your pet with comfort and style!</h2>
                            <p>Perfect bandanas for your pet is here. We also have a special 25% off you!</p>
                        </div>
                        <div>
                        <div class="price">
                            <del><span calss="strikeThrough">$24</span></del> 
                            $<span class="orignalPrice">12</span>
                        </div>  
                        <a href="index.php?controller=pages&action=products" class="cta-primary submitBtn">Start Shopping</a>
                        </div>
                    </div>
                    <div class="hide-s hide-m col-6-l">
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
                            <h2 class="heading">Perfect Bandana’s do exist!</h2>
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
                <div class="imgContainer peep hide-s hide-m">
                    <img src="imgs/cat2.png" alt="">
                </div>
            </div>
        </section>

        <section>
            <?=$this->state["about"]?>
        </section>
        <div id="subscribe">
            <div class="siteContainer">
                <div class="content">
                    <h2>Avail the special 25% offer now!</h2>
                    <a href="index.php?controller=pages&action=products" class="cta-primary">Start Shopping</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js" ></script>

</div>