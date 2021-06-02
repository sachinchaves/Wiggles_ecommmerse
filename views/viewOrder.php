
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>
    <style>
        .record {
            margin:20px 0;
        }
    </style>
<h1>Order Listing</h1>
<p>Below is a list of the orders</p>


<?php

// if the success was not set, then set it by default to false, otherwise use its set value
$_GET["success"] = (isset($_GET["success"])) ? $_GET["success"] : false;
if($_GET["success"])
{?>
    <div class="success">
    <h2>Success: The record was created</h2>
    </div>
<?php
}
?>
<a href="teamform.php" class="cta-primary">Add New Record</a>

<div class="recordList">
    <div class="recordListHeading">
   
        <span>Customer ID</span>
        
        <span>Payment Mode</span>
        <span>Subtotal</span>
        <span>Tax</span>
        <span>Total</span>
    </div>

    <?php
    forEach($this->state["orders"] as $row)
    {
    ?>
        <div class="record">
            <h3></h3>
            <div>
                <div class="recordContainer">
                    <span class="recordHeading">Customer ID</span>
                    <span><?=$row["customerId"]?></span>
                </div>
                
                <div class="recordContainer">
                    <span class="recordHeading">Order ID</span>
                    <span><?=$row["orderId"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Name</span>
                    <span><?=$row["firstName"]?></span>
                    <span><?=$row["lastName"]?></span>
                </div>
                
                <div class="recordContainer">
                    <span class="recordHeading">Contact</span>
                    <span><?=$row["phone"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Amount</span>
                    <span><?=$row["total"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Status</span>
                    <span><?=$row["status"]?></span>
                </div>

            </div>

            <div>
                <h3>Ordered Items</h3>

                <div class="recordContainer">
                    <span class="recordHeading">Item Name</span>
                    <span><?=$row["name"]?></span>
                </div>

                <div class="recordContainer">
                    <span class="recordHeading">Item Quatity</span>
                    <span><?=$row["productQuantity"]?></span>
                </div>
            </div>

            <div>
                <h3>Customer Info</h3>
                <div class="recordContainer">
                    <span class="recordHeading">Name</span>
                    <span><?=$row["firstName"]?></span>
                    <span><?=$row["lastName"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Phone</span>
                    <span><?=$row["phone"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Email</span>
                    <span><?=$row["email"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Address</span>
                    <span><?=$row["address"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">City</span>
                    <span><?=$row["city"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Province</span>
                    <span><?=$row["province"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Postal Code</span>
                    <span><?=$row["postalCode"]?></span>
                </div>
                <div class="recordContainer">
                    <span class="recordHeading">Country</span>
                    <span><?=$row["country"]?></span>
                </div>
            </div>
            <span><a href="teamform.php?recordID=<?=$row["id"]?>">Edit</a></span>
            <span><a href="index.php?controller=pages&action=deleteOrderAdmin?recordID=<?=$row["id"]?>" onClick="return confirm('are you sure')">Delete</a></span>
        </div>
    <?php
    }
    ?>
    
</div>

</body>
</html>