
<div class="product-detail">

<div class="thumbnail">
    <img src="imgs/<?=$this->state["product"]->image?>" alt="<?=$this->state["product"]->name?>" />
</div>

<div class="info">
    <form action="index.php?controller=cart&action=addItemToCart" method="post">
        <input type="hidden" name="itemId" value="<?=$this->state["product"]->id?>">
        <input type="hidden" name="itemImg" value="<?=$this->state["product"]->image?>">
        <input type="hidden" name="itemName" value="<?=$this->state["product"]->name?>">
        <input type="hidden" name="itemPrice" value="<?=$this->state["product"]->price?>">
        <h1><?=$this->state["product"]->name?></h1>
        <p><?=$this->state["product"]->description?></p>

        <div class="price">
            $<?=$this->state["product"]->price?>
        </div>
        
        <input type="number" id="quantity" name="itemQuantity" value="1" min="1" max="<?=$this->state["product"]->quantity?>">
        <select name="itemSize" id="size">
        <?php
            foreach($this->state["product"]->getSizeOptions() as $size){
                echo "<option>".$size["name"]."</option>";
            }
        ?>
        </select>
        <input type="submit" name="addToCart" val="Add To Cart">
    </form>
    
</div>

</div>