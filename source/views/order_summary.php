
        <div id="orderSummary">
            <div class="siteContainer">
                <div class="orderContainer">
                    <h2>Order Summary</h2>
                    <div class="contents">
                        <?php
                        foreach($_SESSION["cart"] as $keys => $values){
                        ?>
                        <div class="item">
                            <div class="productName">
                               <h3> <?=$values["productName"]?></h3>
                            </div>
                            <div class="productQty">
                                <p>Quantity: <?=$values["productQuantity"]?></p>
                            </div>
                            
                            <div class="productSize">
                                <p>Size: <?=$values["productSize"]?></p>
                            </div>
                            <div class="productPrice">
                                <p>Price: <?=$values["productPrice"]?></p>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="cartSubTotal">
                        <p>Sub-Total: CA$ <?=CartModel::getSubTotal()?></p>
                    </div>
                    <div class="shipping">
                        <p>Shipping: Free</p>
                    </div>
                    <div class="cartTax">
                        <p>Tax: CA$ <?=CartModel::getTax()?></p>
                    </div>
                    <div class="cartTotal">
                        <p><strong>Total: CA$ <?=CartModel::getTotal()?></strong></p>
                    </div>

                    <!-- <a href="index.php?controller=cart&action=pay" class="btn cta-primary">Proceed to Checkout</a> -->
                </div>
            </div>
        </div>
