<div class="addProduct">
    <div class="siteContainer">
        <form action="index.php?controller=pages&action=saveProduct" method="post">
            <div class="fieldset">
                <label>Name</label>
                <input type="text" name="name" value="">
            </div>

            <div class="fieldset">
                <label>Image</label>
                <input type="text" name="name" value="">
            </div>
            <div class="fieldset">
                <label>Description</label>
                <input type="text" name="description" value="">
            </div>
            <div class="fieldset">
                <label>Short Description</label>
                <input type="text" name="shortDescription" value="">
            </div>
            <div class="fieldset">
                <label>Price</label>
                <input type="text" name="price" value="">
            </div>
            <div class="fieldset">
                <label>Featured</label>
                <select name="featured">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="fieldset">
                <label>Top Selling</label>
                <select name="topSelling">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="fieldset">
                <label>Size Id</label>
                <input type="text" name="sizeId" value="">
            </div>
            <div class="fieldset">
                <label>Colour Id</label>
                <input type="text" name="colourId" value="">
            </div>
            <div class="fieldset">
                <label>Product Quantity</label>
                <input type="text" name="productQuantity" value="">
            </div>
            <div class="fieldset">
                <input type="submit" value="Add Product" class="cta-primary" />
            </div>
        </form>
    </div>
</div>