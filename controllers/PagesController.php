<?php
    class PagesController extends Controller {

        public function default(){
            $this->state["browserTitle"] = "Wiggles | Home";
            $this->state["products"] = ProductsModel::getFeatured();
            $this->state["featuredProductGrid"] = $this->loadView("products-grid");
            $this->state["featuredProduct"] = $this->loadView("featured-products");

            $this->state["products"] = ProductsModel::getTopProd();
            $this->state["topProducts"] = $this->loadView("products-grid");
            
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("home");
            $this->state["html"] = $this->loadView("template");
        }

        public function about(){
            $this->state['content'] = 'about';
            $this->state["html"] = $this->loadView("template");
        }

        public function products(){
            $this->state["pageTitle"] = "Products";
            // $this->state["browserTitle"] = "Cool Products";
    
            // $this->state["content"] = $this->loadView("navbar");
            // $this->state["content"] .= $this->loadView("pageheader");
            // $this->state["footernav"] = $this->loadView("navbar");
    
            // custom page content here
            $this->state["content"] = $this->loadView("navbar");
            $this->state["products"] = ProductsModel::getAll();
            
            $this->state["content"] .= $this->loadView("products-grid");
            $this->state["content"] .= $this->loadView("filter");
            $this->state["content"] .= $this->loadView("products-grid");
            $this->state["html"] = $this->loadView("template");
        }

        public function product_details(){
            $this->state["product"] = ProductModel::get($_GET["product_id"]);
        
            $this->state["pageTitle"] = "Product: ".$this->state["product"]->name;
            $this->state["browserTitle"] = "Cool Products | ".$this->state["product"]->name;
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("product-details");

            $this->state["html"] = $this->loadView("template");
        }

        public function login(){
            $this->state["browserTitle"] = "Wiggles | Login";

            $this->state["content"] = $this->loadView("login");

            $this->state["html"] = $this->loadView("template");
        }

        public function register(){
            $this->state["browserTitle"] = "Wiggles | Register";

            $this->state["content"] = $this->loadView("register");

            $this->state["html"] = $this->loadView("template");
        }

        public function dashboard(){
            $this->state["browserTitle"] = "Wiggles | Dashboard";
            $this->state["products"] = ProductsModel::getAll();
            $this->state["content"] = $this->loadView("dashboard");
            $this->state["html"] = $this->loadView("template");
        }

        public function processLogin(){
            UserModel::login($_POST["username"], $_POST["password"]);
    
        }

        public function processRegister(){
            UserModel::register($_POST["username"], $_POST["password"]);
    
        }

        public function saveContact(){
            UserModel::saveInfo($_POST["firstName"], $_POST["lastName"], $_POST["instaUsername"], $_POST["email"]);
    
        }

        public function editProductDetails(){
            $this->state["product"] = ProductModel::get($_GET["product_id"]);
            $this->state["content"] = $this->loadView("editProductDetails");
            $this->state["html"] = $this->loadView("template");
    
        }

        public function saveProductDetails() {
            ProductsModel::saveProductDetails($_POST["product_id"]);
        }

        public function deleteProduct() {
            ProductsModel::deleteProduct($_POST["product_id"]);
        }

        public function addProduct() {
            $this->state["browserTitle"] = "Wiggles | Dashboard";
            $this->state["content"] = $this->loadView("addProduct");
            $this->state["html"] = $this->loadView("template");
        }

        public function saveProduct(){
            ProductsModel::saveProduct($_POST["name"], $_POST["shortDescription"], $_POST["description"], $_POST["price"], $_POST["featured"], $_POST["topSelling"]);
        }

        public function filter() {
            $this->state["products"] = ProductsModel::filterProducts($_POST["sizeId"]);
            $this->state["content"] = $this->loadView("products-grid");
            $this->state["html"] = $this->loadView("template");
        }
        
        public function thankyou(){
            $this->state["browserTitle"] = "Thank you";

            $this->state["content"] = $this->loadView("thankyou");

            $this->state["html"] = $this->loadView("template");
        }

        public function error(){
            $this->state["errorMsg"] = "Action not found";
            $this->state["content"] = $this->loadView("error");
            $this->state["html"] = $this->loadView("template");
        }

        public function postTrip(){
            echo $this->state["html"];
        }
    }
?>