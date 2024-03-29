
<div id="productInfo">
    <div class="product-detail">

    <div class="siteContainer">
        <div class="row">
            <div class="col-6-m col-6-l">
                <div class="thumbnail">
                    <img src="imgs/<?=$this->state["product"]->image?>" alt="<?=$this->state["product"]->name?>" />
                </div>
            </div>
            <div class="col-6-m col-6-l">
                <div class="info">
                    <form action="index.php?controller=cart&action=addItemToCart" method="post">
                        <input type="hidden" name="itemId" value="<?=$this->state["product"]->id?>">
                        <input type="hidden" name="itemImg" value="<?=$this->state["product"]->image?>">
                        <input type="hidden" name="itemName" value="<?=$this->state["product"]->name?>">
                        <input type="hidden" name="itemPrice" value="<?=$this->state["product"]->price?>">
                        <h2><?=$this->state["product"]->name?></h2>
                        <div class="price">
                            <del><span calss="strikeThrough">$24</span></del> 
                            <span class="orignalPrice">
                                $<?=$this->state["product"]->price?>
                            </span>
                            
                        </div>
                        
                        <div class="fieldset">
                            <label for="itemSize">Select Size:</label>
                            <select name="itemSize" id="size">
                                <?php
                                    foreach($this->state["product"]->getSizeOptions() as $size){
                                        echo "<option>".$size["name"]."</option>";
                                    }
                                ?>
                            </select>
                            <a href="javascript:void(0)" class="sizeChartLink"> Size Chart</a>
                            <ul class="sizeChart hide">
                                <li><small>XS-fits neck sized upto 10 Inces</small></li>
                                <li><small>S-fits neck sized upto 16 Inces</small></li>
                                <li><small>M-fits neck sized upto 24 Inces</small></li>
                                <li><small>L fits neck sized upto 27 Inces</small></li>
                                <li><small>XL fits neck sized upto 32 Inces</small></li>
                            </ul>
                        </div>

                        <div class="fieldset">
                            <label for="itemQuantity">Quantity:</label>
                            <input type="number" id="quantity" name="itemQuantity" value="1" min="1" max="<?=$this->state["product"]->quantity?>">
                        </div>
                        <input type="submit" class="cta-primary" name="addToCart" value="Add To Cart">
                    </form>

                    <div class="highlights">
                        <h3 class="subheading">Highlights:</h3>
                        <p>Handmade</p>
                    </div>
                                       
                </div>
            </div>
        </div>
        <div class="row">
                <div class="">
                    <div class="content description">
                        <h3 class="subheading">Description:</h3>
                        <p><?=$this->state["product"]->description?></p>
                    </div>
                </div>
            </div>
    </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/misc.js"></script>