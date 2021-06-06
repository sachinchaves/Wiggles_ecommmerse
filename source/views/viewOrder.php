<div id="orders">
    <div class="siteContainer">


<h1>Order Listing</h1>
<p>Below is a list of the orders</p>
<div class="recordList">
    <?php
    forEach($this->state["orders"] as $row)
    {
    ?>
        <div class="record">
            <h3></h3>
            <div>
                <div class="recordContainer">
                    <span class="recordHeading">Customer ID: </span>
                    <span><?=$row["customerId"]?></span>
                </div>
                
                <div class="recordContainer">
                    <span class="recordHeading">Order ID: </span>
                    <span><?=$row["orderId"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Name: </span>
                    <span><?=$row["firstName"]?></span>
                    <span><?=$row["lastName"]?></span>
                </div>
                
                <div class="recordContainer">
                    <span class="recordHeading">Contact: </span>
                    <span><?=$row["phone"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Amount: </span>
                    <span><?=$row["total"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Status: </span>
                    <span><?=$row["status"]?></span>
                </div>

            </div>

            <div>
                <h3>Ordered Items</h3>

                <div class="recordContainer">
                    <span class="recordHeading">Item Name: </span>
                    <span><?=$row["name"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Item Quatity: </span>
                    <span><?=$row["productQuantity"]?></span>
                </div>
            </div>

            <div>
                <h3>Customer Info</h3>
                <div class="recordContainer">
                    <span class="recordHeading">Name: </span>
                    <span><?=$row["firstName"]?></span>
                    <span><?=$row["lastName"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Phone: </span>
                    <span><?=$row["phone"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Email: </span>
                    <span><?=$row["email"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Address: </span>
                    <span><?=$row["address"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">City: </span>
                    <span><?=$row["city"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Province: </span>
                    <span><?=$row["province"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Postal Code: </span>
                    <span><?=$row["postalCode"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Country: </span>
                    <span><?=$row["country"]?></span>
                </div>
            </div>
            <span><a href="index.php?controller=pages&action=deleteOrderAdmin&recordID=<?=$row["orderId"]?>" class="cta-primary" onClick="return confirm('are you sure')">Delete</a></span>
            <a href="index.php?controller=pages&action=changeOrderStatus&recordID=<?=$row["orderId"]?>" class="cta-primary"> Change order status to full-filled</a>
        </div>
    <?php
    }
    ?>
    

    </div>
</div>