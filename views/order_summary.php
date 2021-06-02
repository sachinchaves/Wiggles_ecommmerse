<div id="orderSummary">
    <div class="">
        <header>
            <h2>Order Summary</h2>
        </header>

        <div class="contents">
            <?php
            foreach($_SESSION["cart"] as $keys => $values){
            ?>
            <div class="item">
                <div class="productName">
                    <?=$values["productName"]?>
                </div>
                <div class="productQty">
                    <?=$values["productQuantity"]?>
                </div>
                
                <div class="productSize">
                <?=$values["productSize"]?>
                </div>
                <div class="productPrice">
                    $<?=$values["productPrice"]?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="cartSubTotal">
             Sub-Total: CA$ <?=CartModel::getSubTotal()?>
        </div>
        <div class="shipping">
             Shipping: Free
        </div>
        <div class="cartTax">
             Tax: CA$ <?=CartModel::getTax()?>
        </div>
        <div class="cartTotal">
             Total: CA$ <?=CartModel::getTotal()?>
        </div>

        <a href="index.php?controller=cart&action=pay" class="btn">Proceed to Checkout</a>
    </div>
</div>
