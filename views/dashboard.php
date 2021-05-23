
<div class="wrapper">
    <div id="dashboard">
        <div class="siteContainer">
        <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            <h2>Customer Details</h2>
            <div class="detailWrapper">
                <div class="detailsContainer">
                <?php
                    foreach($this->state["details"] as $product){
                ?>
                    <div class="details">
                        <p>First Name: <strong><?=$product->firstName?></strong></p>
                        <p>Last Name: <strong><?=$product->lastName?></strong></p>
                        <p>Instagram Username: <strong><?=$product->instaUsername?></strong></p>
                        <p>Email: <strong><?=$product->email?></strong></p>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
