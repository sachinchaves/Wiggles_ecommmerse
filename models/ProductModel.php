<?php

    class ProductModel {
        var $id;
        var $name;
        var $description;
        var $image;
        var $price;

        public function __construct($id,$name, $description, $shortDescription, $image, $price){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->shortDescription = $shortDescription;
            $this->image = $image;
            $this->price = $price;
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
                $productArray["price"]
            );
    
            // object
            return $product;
        }

        public function getSizeOptions()
        {
            $sizeArray = DB::fetchAll("SELECT * FROM product_sizes WHERE pid='".$this->id."'");
            return $sizeArray;
        }
    }
    
?>