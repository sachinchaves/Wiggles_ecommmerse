<?php
    class CartController extends Controller {
        public function addItemToCart() {
            CartModel::addItemToCart($_POST["itemId"], $_POST["itemImg"], $_POST["itemName"], $_POST["itemPrice"], $_POST["itemQuantity"], $_POST["itemSize"]);
            header("location: index.php?controller=cart&action=checkout");
        }

        public function checkout() {
            $this->state["pageTitle"] = "Cart Contents";
            $this->state["browserTitle"] = "Your Cart Contents";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("cart_contents");
            $this->state["html"] = $this->loadView("template");
        }


        public function checkUserStatus(){
            UserModel::checkLoggedInCustomer();
        }

        public function billingInfo(){
            $this->state["pageTitle"] = "Cart Contents";
            $this->state["browserTitle"] = "Your Cart Contents";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("order_summary");
            $this->state["content"] .= $this->loadView("billing_info");
            $this->state["html"] = $this->loadView("template");
        }

        public function delete() {
            CartModel::deleteCartItem($_GET['id']);
            header("location: index.php?controller=cart&action=checkout");
        }

        public function processOrder() {
            CartModel::createOrder();
        }
        public function error(){

        }
    }
?>