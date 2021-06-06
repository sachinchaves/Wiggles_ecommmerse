
<div class="wrapper">
    <div id="dashboard">
        <div class="siteContainer">
            <h2>Product Details</h2>
            <a href="index.php?controller=pages&action=addProduct" class="cta-primary add">Add Product</a>
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
                                    
                                    <div>
                                        <a href="index.php?controller=pages&action=editProductDetails&product_id=<?=$product->id?>" class="cta-primary edit">Edit Product</a>
                                        <a href="index.php?controller=pages&action=deleteProduct&product_id=<?=$product->id?>" class="cta-primary edit">Delete Product</a>
                                    </div>
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
