<div id="productGrid">
<?php
    foreach($this->state["products"] as $product){
    ?>
    <div class="product">
        <div class="product-container">
            <div class="cover-photo">
                <img src="imgs/<?=$product->image?>" alt="<?=$product->name?>"/>
                
            </div>
            <div class="details">
                <h2><a href="index.php?controller=pages&action=product_details&product_id=<?=$product->id?>"><?=$product->name?></a></h2>
                <p><?=$product->description?></p>
                <span class="price">$<?=$product->price?></span>
                <a href="index.php?controller=cart&action=addItemToCart&productId=<?=$product->id?>" class="addToCartBtn">ADD TO CART</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>