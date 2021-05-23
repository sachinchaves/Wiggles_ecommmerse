<div class="cart">
    <header>
        <h2>Your Cart</h2>
    </header>

    <div class="contents">
        <?php
        foreach(CartModel::getItems() as $product){
        ?>
        <div class="item">
            <div class="name">
                <?=$product->name?>
            </div>
            <div class="qty">
                1
            </div>
            <div class="price">
                $<?=$product->price?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="cartTotal">
        CART TOTAL: <?=CartModel::getTotal()?>
    </div>

    <a href="index.php?controller=cart&action=paymentdetails" class="btn">CHECKOUT</a>
</div>
