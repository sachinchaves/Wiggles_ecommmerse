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
            return count( $_SESSION["cart"] );
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
            // $productName;
            // var $customerFirstName;
            // var $customerLastName;
            // var $customerPhone;
            // var $customerEmail;
            // var $customerAddress;
            // var $customerCity;
            // var $customerProvince;
            // var $customerPostalCode;
            // var $customerCountry;
            // var $productName;
            // var $productPrice;
            
            // $customersArr = array();
            $customers = DB::fetchOne("SELECT * FROM customers WHERE id='".$_SESSION["customerId"]."'");
            $products = CartModel::getItems();
            foreach(CartModel::getItems() as $product){
                $productId = $product->id;
                $productName = $product->name;
                $productName = $product->name;
                $productName = $product->name;
                $productName = $product->name;
            }
            // var_dump($product);

        }

        static public function deleteCartItem($id){
            foreach($_SESSION["cart"] as $keys => $value){
                if($values["productId"] == $id){
                    unset($_SESSION["cart"][$keys]);
                }
            }
            header("location: index.php?controller=cart&action=checkout");
        }
    }
?>