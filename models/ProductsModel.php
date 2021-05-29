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
                $product = new ProductModel($product["id"],$product["name"],$product["description"], $product["shortDescription"],$product["image"],$product["price"], $product["quantity"]);
            }
    
            return $products;
    
        }

        static public function saveProductDetails($id){
            DB::runQuery("UPDATE products SET name='".$_POST["name"]."', shortDescription='".$_POST["shortDescription"]."', description='".$_POST["description"]."', price='".$_POST["price"]."' WHERE id='".$id."' ");
            header("location: index.php?controller=pages&action=dashboard");
        }

        static public function deleteProduct($id){
            DB::runQuery("DELETE FROM products WHERE id='".$id."'");
            header("location: index.php?controller=pages&action=dashboard");
        }

        static public function saveProduct($name, $shortDescription, $description, $price, $featured, $topSelling){
            DB::runQuery("INSERT INTO products (name, shortDescription, description, price, featured, topSelling ) VALUES ('".$name."', '".$shortDescription."', '".$description."', '".$price."', '".$featured."', '".$topSelling."')");
            header("location: index.php?controller=pages&action=dashboard");
        }

        static public function filterProducts($selectedId) {
            $filter = $selectedId ? 'sizeId="'.$selectedId.'"' : "";
            
            $products = DB::fetchAll("SELECT * FROM products WHERE $filter ");
            return ProductsModel::productFactory($products);
        }

    }
?>