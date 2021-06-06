<div class="editProductDetails">
    <div class="siteContainer">
        
        <form action="index.php?controller=pages&action=saveProductDetails" method="post">
            <input type="hidden" name="product_id" value="<?=$this->state["product"]->id?>">
            <div class="fieldset">
                <label>Name</label>
                <input type="text" name="name" value="<?=$this->state["product"]->name?>">
            </div>

            <div class="fieldset">
                <label>Image</label>
                <input type="text" name="name" value="<?=$this->state["product"]->image?>">
            </div>
            <div class="fieldset">
                <label>Description</label>
                <input type="text" name="description" value="<?=$this->state["product"]->description?>">
            </div>
            <div class="fieldset">
                <label>Short Description</label>
                <input type="text" name="shortDescription" value="<?=$this->state["product"]->shortDescription?>">
            </div>
            <div class="fieldset">
                <label>Price</label>
                <input type="text" name="price" value="<?=$this->state["product"]->price?>">
            </div>
            <div class="fieldset">
                <label>Quantity</label>
                <input type="text" name="price" value="<?=$this->state["product"]->quantity?>">
            </div>
            <div class="fieldset">
                <input type="submit" value="Update Product" class="cta-primary" />
            </div>
        </form>
    </div>
</div>