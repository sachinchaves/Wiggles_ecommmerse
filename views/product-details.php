
<div class="product-detail">

<div class="thumbnail">
    <img src="imgs/<?=$this->state["product"]->image?>" alt="<?=$this->state["product"]->name?>" />
</div>

<div class="info">
    <h1><?=$this->state["product"]->name?></h1>
    <p><?=$this->state["product"]->description?></p>

    <div class="price">
        $<?=$this->state["product"]->price?>
    </div>
    <a href="index.php?controller=cart&action=addItemToCart&productId=<?=$this->state["product"]->id?>" class="addToCartBtn">ADD TO CART</a>
    
</div>

</div>