<?php

    class ProductModel {
        var $id;
        var $name;
        var $description;
        var $image;
        var $price;
        var $quantity;

        public function __construct($id,$name, $description, $shortDescription, $image, $price, $quantity){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->shortDescription = $shortDescription;
            $this->image = $image;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        static public function get($id)
        {
            $productArray = DB::fetchOne("SELECT * FROM products WHERE id='".$id."'");
    
            $product = new ProductModel(
                $productArray["id"],
                $productArray["name"],
                $productArray["description"],
                $productArray["shortDescription"],
                $productArray["image"],
                $productArray["price"],
                $productArray["ProductQuantity"]
            );
    
            // object
            return $product;
        }

        public function getSizeOptions()
        {
            $sizeArray = DB::fetchAll("SELECT * FROM product_sizes WHERE pid='".$this->id."'");
            return $sizeArray;
        }


        static public function buildDropDown($arrOptions, $selectedId) {
            foreach($arrOptions as $option) {
                $selectedState = ($selectedId == $option["id"]) ? "SELECTED" : "";
                echo '<option value="'.$option["id"].'" '.$selectedState.' >'.$option["name"].'</option>';
            }
        }
    }
    
?>