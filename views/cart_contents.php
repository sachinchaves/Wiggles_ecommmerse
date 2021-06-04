<div id="cart">
    <div class="siteContainer">
        <header>
            <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            <h2>Shopping Cart</h2>
        </header>
        <div class="row">
            <div class="col-12-m">
                <div class="contents">
                    <?php
                    foreach($_SESSION["cart"] as $keys => $values){
                    ?>
                    <div class="col-12-m">
                        <div class="item">
                            <div class="row">
                                
                                <div class="col-12-s col-4-m col-3-l">
                                    <div class="img">
                                        <img src="imgs/<?=$values['productImg'];?>" alt="<?=$values['productName'];?>" /> 
                                    </div>
                                </div>
                                <div class="col-12-x col-5-m col-5-l">
                                    <div class="name">
                                        <h3><?=$values['productName'];?></h3>
                                    </div>
                                    <a href="index.php?controller=cart&action=delete&id="<?=$values['productId'];?>" class="btn">Delete</a>
                                    <div class="size">
                                        <p>Size: <?=$values['productSize'];?></p>
                                    </div>
                                    <div class="qty">
                                        <p>Quantity: <?=$values['productQuantity'];?></p>
                                    </div>
                                </div>
                                <div class="col-12-s col-3-m">
                                    <div class="price">
                                        <span>Price :</span> <?=$values['productPrice'];?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>
                </div>
                
            </div>
            <div class="col-12-s col-12-m cartTotalContainer">
                <div class="cartTotal">
                        CART TOTAL: <?=CartModel::getSubTotal()?>
                    </div>
                </div>
                <a href="index.php?controller=cart&action=checkUserStatus" class="btn cta-primary">Proceed to Checkout</a>
            </div>
       
    </div>
</div>
