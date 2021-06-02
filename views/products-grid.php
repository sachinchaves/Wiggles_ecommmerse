<div id="productGrid" class="productWrapper">
<?php
    foreach($this->state["products"] as $product){
    ?>
    <div class="productBox">
        <div class="thumbnail">
            <a href="index.php?controller=pages&action=product_details&product_id=<?=$product->id?>">
                <img src="imgs/<?=$product->image?>" alt="<?=$product->name?>" />
            </a>    
        </div>
        <form action="index.php?controller=cart&action=addItemToCart" method="post">
            <input type="hidden" name="itemId" value="<?=$product->id?>">
            <input type="hidden" name="itemImg" value="<?=$product->image?>">
            <input type="hidden" name="itemName" value="<?=$product->name?>">
            <input type="hidden" name="itemPrice" value="<?=$product->price?>">
            <h3><a href="index.php?controller=pages&action=product_details&product_id=<?=$product->id?>"><?=$product->name?></a></h3>
            <p class="content"><?=$product->shortDescription?></p>
            <div class="price">
                <del><span calss="strikeThrough">$24</span></del> 
                $<span class="orignalPrice"><?=$product->price?></span>
            </div>
            
            <div class="fieldset hide">
            <label for="itemQuantity"> Quantity</label>
            <input type="number" id="quantity" name="itemQuantity" value="1" min="1" max="<?=$product->quantity?>">
            </div>
            <div class="fieldset hide">
                <select name="itemSize" id="size">
                <?php
                    foreach($product->getSizeOptions() as $size){
                        echo "<option>".$size["name"]."</option>";
                    }
                ?>
                </select>
            </div>
            
            <input type="submit" class="cta-primary" name="addToCart" value="Add To Cart">    
        </form>   
    </div> 
          
    <?php
    }
    ?>
</div>


</a>