<?php
    class ProductsModel {
        static public function getAll(){
            $products = DB::fetchAll("SELECT * FROM products");
            return ProductsModel::productFactory($products);
        }

        static public function getFeatured(){
            $products = DB::fetchAll("SELECT * FROM products WHERE featured='1'");
            return ProductsModel::productFactory($products);
        }

        static public function getTopProd(){
            $products = DB::fetchAll("SELECT * FROM products WHERE topSelling='1'");
            return ProductsModel::productFactory($products);
        }

        static public function productFactory($products){
            foreach($products as &$product){
                $product = new ProductModel($product["id"],$product["name"],$product["description"], $product["shortDescription"],$product["image"],$product["price"]);
            }
    
            return $products;
    
        }
    }
?>