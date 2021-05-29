<div class="cart">
    <header>
        <h2>Your Cart</h2>
    </header>
    <?php
    var_dump($_SESSION["cart"]) ;
    ?>
    <div class="contents">
        <?php
        foreach($_SESSION["cart"] as $keys => $values){
        ?>
        <div class="item">
            <div class="img">
                <img src="imgs/<?=$values['productImg'];?>" alt="<?=$values['productName'];?>" /> 
            </div>
            <div class="name">
                <?=$values['productName'];?>
            </div>
            <a href="index.php?controller=cart&action=delete&id="<?=$values['productId'];?>" class="btn">Delete</a>
            <div class="size">
                <?=$values['productSize'];?>
            </div>
            <div class="qty">
                <?=$values['productQuantity'];?>
            </div>
            <div class="price">
                <?=$values['productPrice'];?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="cartTotal">
        CART TOTAL: <?=CartModel::getSubTotal()?>
    </div>

    <a href="index.php?controller=cart&action=checkUserStatus" class="btn">Proceed to Checkout</a>
</div>
