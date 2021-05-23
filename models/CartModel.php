<?php

    class CartModel {
        
        static public function addItemToCart($productId){
            $_SESSION["cart"][] = $productId;
        }

        static public function getNumItemsInCart(){
            return count( $_SESSION["cart"] );
        }

        static public function getItems(){
            $arrItems = array();
            foreach($_SESSION["cart"] as $productId)
            {
                $arrItems[] = ProductModel::get($productId);
            }
            
            // array
            return $arrItems;
           
        }

        static public function getTotal(){
            $totalPrice = 0;
            foreach($_SESSION["cart"] as $productId)
            {
                // object
                $totalPrice = $totalPrice + ProductModel::get($productId)->price;
            }
            
            // Array
            return $totalPrice;
           
        }
    }
?>