<?php

    class CartModel {
        
        static public function addItemToCart($itemId, $itemImg, $itemName, $itemPrice, $itemQuantity, $itemSize){
            if(isset($_SESSION["cart"])){
                $item_array_id = array_column($_SESSION["cart"], 'productId');
                if(!in_array($itemId, $item_array_id)){
                    $count = count($_SESSION["cart"]);
                    // $count = 2;
                    $itemArr = array(
                        'productId' => $itemId,
                        'productImg' => $itemImg,
                        'productName' => $itemName,
                        'productPrice' => $itemPrice,
                        'productQuantity' => $itemQuantity,
                        'productSize' => $itemSize
                    );
                    $_SESSION["cart"][$count] = $itemArr;
                }
                else {
                    echo "Item already exixts";
                }
            }
            else {
                $itemArr = array(
                    'productId' => $itemId,
                    'productImg' => $itemImg,
                    'productName' => $itemName,
                    'productPrice' => $itemPrice,
                    'productQuantity' => $itemQuantity,
                    'productSize' => $itemSize
                );
                var_dump($itemArr);
                $_SESSION["cart"][0] = $itemArr;
            }
        }

        static public function getNumItemsInCart(){
            return (isset($_SESSION["cart"])) ? count($_SESSION["cart"]) : 0;
        }

        static public function getItems(){
            $arrItems = array();
            foreach($_SESSION["cart"] as $product)
            {
                $arrItems[] = ProductModel::get($productId);
            }
            
            // array
            return $arrItems;
           
        }

        static public function getSubTotal(){
            $totalPrice = 0;
            foreach($_SESSION["cart"] as $key => $values)
            {
                // object
                $totalPrice = $totalPrice + $values['productPrice'];
            }
            
            // Array
            return $totalPrice;
           
        }

        static public function getTax(){
            $totalPrice = CartModel::getSubtotal();
            return ( $totalPrice * .5);
        }

        static public function getTotal(){
            $totalPrice = CartModel::getSubtotal();
            $tax = CartModel::getTax();
            // Array
            return $tax + $totalPrice;
           
        }

        static public function createOrder(){
            var_dump($_SESSION["cart"]);
            
            // $customersArr = array();
            $customers = DB::fetchOne("SELECT * FROM customers WHERE id='".$_SESSION["customerId"]."'");
            foreach($_SESSION["cart"] as $keys => $values){
                $productId = $values["productId"];
                $productName = $values["productName"];
                $productPrice = $values["productPrice"];
                $productQuantity = $values["productQuantity"];
                $productSize = $values["productSize"];
            }
            $status = "pending";
            $subtotal = CartModel::getSubtotal();
            $tax = CartModel::getTax();
            $total = CartModel::getTotal();
            $firstName = $customers["firstName"];
            $lastName = $customers["lastName"];
            $phone = $customers["phone"];
            $username = $customers["username"];
            $address = $customers["address"];
            $city = $customers["city"];
            $province = $customers["province"];
            $postalCode = $customers["postalCode"];
            $country = $customers["country"];
            // https://alvinalexander.com/php/php-date-formatted-sql-timestamp-insert/
             $timestamp = date('Y-m-d H:i:s');
            
            // var_dump($product);
            $con = DB::connect();
            $sql = ("INSERT INTO orders (customerId, status, subtotal, tax, total, firstname, lastName, phone, email, address, city, province, postalCode, country, orderCreatedAt ) VALUES ('".$_SESSION["customerId"]."', 'pending', '".$subtotal."', '".$tax."', '".$total."', '".$firstName."', '".$lastName."', '".$phone."', '".$username."', '".$address."', '".$city."', '".$province."', '".$postalCode."', '".$country."', '".$timestamp."')");
            mysqli_query($con,$sql);

            $orderId = mysqli_insert_id($con);
            $_SESSION["orderId"] = $orderId;
            DB::runQuery("INSERT INTO order_items (productId, orderId, price, quantity, orderItemCreatedAt) VALUES ('".$productId."', '".$orderId."', '".$productPrice."', '".$productQuantity."', '".$timestamp."') ");

            header("location: index.php?controller=cart&action=payment");

        }

        static public function deleteCartItem($id){
            foreach($_SESSION["cart"] as $keys => $value){
                if($values["productId"] == $id){
                    unset($_SESSION["cart"][$keys]);
                }
            }
            header("location: index.php?controller=cart&action=checkout");
        }

        static public function completePayment() {
            $timestamp = date('Y-m-d H:i:s');
            DB::runQuery("INSERT INTO transactions (customerId, orderId, paymentMode, createdAt) VALUES ('".$_SESSION["customerId"]."', '".$_SESSION["orderId"]."', 'Credit Card', '".$timestamp."')");
            $products = DB::fetchOne("SELECT productId, quantity FROM order_items WHERE orderId='".$_SESSION["orderId"]."' ");
            
            foreach($products as $product) {
                $quantity = DB::fetchOne("SELECT productQuantity FROM products WHERE id='".$products["productId"]."' ");
                if($quantity["productQuantity"] >= $products["quantity"]){
                    DB::runQuery("UPDATE products SET quantity = '".$quantity["productQuantity"]."' - '".$products["quantity"]."' WHERE id='".$products["productId"]."' ");
                }else {
                    echo 'does not work';
                }
            }

            DB::runQuery("UPDATE orders SET `status`='Placed' WHERE id='".$_SESSION["orderId"]."' ");
            header("location: index.php?controller=cart&action=thankYou");
        }

        static public function unsetItems(){
            unset($_SESSION["cart"]);
            unset($_SESSION["orderId"]);
        }
    }
?>