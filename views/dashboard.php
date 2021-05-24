
<div class="wrapper">
    <div id="dashboard">
        <div class="siteContainer">
        <h1 class="logo">Wiggles | The Pet Bandana shop</h1>
            <h2>Product Details</h2>
            <a href="index.php?controller=pages&action=addProduct" class="add">Add Product</a>
            <div class="detailWrapper">
                <div class="detailsContainer">
                    <div id="detailGrid">
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
                                    <p><?=$product->shortDescription?></p>
                                    <span class="price">$<?=$product->price?></span>
                                    <div class="options">
                                        <h1>Size Options</h1>
                                    <?php

                                    foreach($product->getSizeOptions() as $size){
                                        echo $size["name"]."<br/>";
                                    }
                                    ?>
                                    </div>
                                    <!-- <a href="index.php?controller=cart&action=addItemToCart&productId=<?=$product->id?>" class="addToCartBtn">ADD TO CART</a> -->
                                    <a href="index.php?controller=pages&action=editProductDetails&product_id=<?=$product->id?>" class="edit">Edit Product</a>
                                    <a href="index.php?controller=pages&action=deleteProduct&product_id=<?=$product->id?>" class="edit">Delete Product</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
