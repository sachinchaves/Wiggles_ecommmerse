<?php
    class PagesController extends Controller {

        public function default(){
            $this->state["browserTitle"] = "Wiggles | Home";
            $this->state["products"] = ProductsModel::getFeatured();
            $this->state["featuredProductGrid"] = $this->loadView("products-grid");
            $this->state["featuredProduct"] = $this->loadView("featured-products");

            $this->state["products"] = ProductsModel::getTopProd();
            $this->state["topProducts"] = $this->loadView("products-grid");
            $this->state["topProducts"] = $this->loadView("top-products");
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("home");
            $this->state["content"] .= $this->loadView("footer");
            $this->state["html"] = $this->loadView("template");
        }

        public function about(){
            $this->state["browserTitle"] = "Wiggles | About";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("about");
            $this->state["content"] .= $this->loadView("footer");
            $this->state["html"] = $this->loadView("template");
        }

        public function contact(){
            $this->state["browserTitle"] = "Wiggles | Contact";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("contact");
            $this->state["content"] .= $this->loadView("footer");
            $this->state["html"] = $this->loadView("template");
        }

        public function products(){
            $this->state["browserTitle"] = "Wiggles | Products";
            // $this->state["browserTitle"] = "Cool Products";
    
            // $this->state["content"] = $this->loadView("navbar");
            // $this->state["content"] .= $this->loadView("pageheader");
            // $this->state["footernav"] = $this->loadView("navbar");
    
            // custom page content here
            $this->state["content"] = $this->loadView("navbar");
            $this->state["products"] = ProductsModel::getAll();
            $this->state["productItems"] = $this->loadView("filter");
            $this->state["productItems"] .= $this->loadView("products-grid");
            $this->state["content"] .= $this->loadView("products");
            $this->state["content"] .= $this->loadView("footer");
            $this->state["html"] = $this->loadView("template");
        }

        public function product_details(){
            $this->state["browserTitle"] = "Wiggles | Product Details";
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

        public function adminLogin(){
            $this->state["browserTitle"] = "Wiggles | Admin Login";

            $this->state["content"] = $this->loadView("adminLogin");

            $this->state["html"] = $this->loadView("template");
        }

        public function register(){
            $this->state["browserTitle"] = "Wiggles | Register";

            $this->state["content"] = $this->loadView("register");
            // $this->state["content"] .= $this->loadView("order_summary");

            $this->state["html"] = $this->loadView("template");
        }

        public function dashboard(){
            $this->state["browserTitle"] = "Wiggles | Dashboard";
            $this->state["products"] = ProductsModel::getAll();
            $this->state["content"] = $this->loadView("adminNav");
            $this->state["content"] .= $this->loadView("dashboard");
            $this->state["html"] = $this->loadView("template");
        }

        public function processLogin(){
            UserModel::login($_POST["username"], $_POST["password"], $_POST["loginType"]);
    
        }

        public function processRegister(){
            UserModel::register($_POST["firstName"], $_POST["lastName"], $_POST["phone"], $_POST["username"], $_POST["password"], $_POST["address"], $_POST["city"], $_POST["province"], $_POST["postalCode"], $_POST["country"]);
    
        }

        //challenge landing page
        public function landing(){
            $this->state["browserTitle"] = "Wiggles | The Pet Banda Shop";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["about"] = $this->loadView("about");
            $this->state["products"] = ProductsModel::getFeatured();
            $this->state["featuredProductGrid"] = $this->loadView("products-grid");
            $this->state["featuredProduct"] = $this->loadView("featured-products");
            $this->state["content"] .= $this->loadView("landing");
            $this->state["content"] .= $this->loadView("footer");
            $this->state["html"] = $this->loadView("template");
        }

        public function saveContact(){
            UserModel::saveInfo($_POST["firstName"], $_POST["lastName"], $_POST["instaUsername"], $_POST["email"]);
    
        }

        public function saveContactInfo(){
            UserModel::saveContactInfo($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"]);
    
        }

        public function editProductDetails(){

            $this->state["content"] = $this->loadView("adminNav");
            $this->state["product"] = ProductModel::get($_GET["product_id"]);
            $this->state["content"] .= $this->loadView("editProductDetails");
            $this->state["html"] = $this->loadView("template");
    
        }

        public function saveProductDetails() {
            ProductsModel::saveProductDetails($_POST["product_id"]);
        }

        public function deleteProduct() {
            ProductsModel::deleteProduct($_POST["product_id"]);
        }

        public function addProduct() {
            $this->state["browserTitle"] = "Wiggles | Add Product";
            $this->state["content"] = $this->loadView("adminNav");
            $this->state["content"] .= $this->loadView("addProduct");
            $this->state["html"] = $this->loadView("template");
        }

        public function viewOrders(){
            $this->state["content"] = $this->loadView("adminNav");
            $this->state["orders"] = ProductsModel::viewOrders();
            $this->state["content"] .= $this->loadView("viewOrder");
            $this->state["html"] = $this->loadView("template");
        }

        public function saveProduct(){
            ProductsModel::saveProduct($_POST["name"], $_POST["shortDescription"], $_POST["description"], $_POST["price"], $_POST["featured"], $_POST["topSelling"], $_POST["sizeId"], $_POST["colourId"], $_POST["productQuantity"]);
        }

        public function deleteOrderAdmin(){
            ProductsModel::deleteOrder($_GET["recordID"]);
        }

        public function changeOrderStatus() {
            CartModel::updateOrderStatus($_GET["recordID"]);
        }

        public function filter() {
            $this->state["products"] = ProductsModel::filterProducts($_POST["sizeId"]);
            $this->state["content"] = $this->loadView("products-grid");
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