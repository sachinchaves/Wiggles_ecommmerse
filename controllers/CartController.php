<?php
    class CartController extends Controller {
        public function addItemToCart() {
            CartModel::addItemToCart($_POST["itemId"], $_POST["itemImg"], $_POST["itemName"], $_POST["itemPrice"], $_POST["itemQuantity"], $_POST["itemSize"]);
            header("location: index.php?controller=cart&action=checkout");
        }

        public function checkout() {
            // $this->state["pageTitle"] = "Cart Contents";
            $this->state["browserTitle"] = "Your Cart Contents";
            // $this->state["orderSummary"] = $this->loadView("order_summary");
            $this->state["content"] = $this->loadView("cart_contents");
           
            $this->state["html"] = $this->loadView("template");
        }


        public function checkUserStatus(){
            UserModel::checkLoggedInCustomer();
        }

        public function billingInfo(){
            // $this->state["pageTitle"] = "Cart Contents";
            $this->state["browserTitle"] = "Cart | Billing Info";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("order_summary");
            $this->state["content"] .= $this->loadView("billing_info");
            $this->state["html"] = $this->loadView("template");
        }

        public function delete() {
            CartModel::deleteCartItem($_GET['id']);
        }

        public function processOrder() {
            CartModel::createOrder();
        }

        public function updateQuantity() {
            CartModel::getSubTotal();
        }

        public function payment() {
            $this->state["browserTitle"] = "Cart | Payment";
            $this->state["content"] = $this->loadView("payment");
            $this->state["content"] .= $this->loadView("order_summary");
            $this->state["html"] = $this->loadView("template");
        }

        public function completePayment() {
            CartModel::completePayment();
        }

        public function thankyou(){
            $this->state["browserTitle"] = "Thank you";
            $this->state["content"] = $this->loadView("navbar");
            CartModel::unsetItems();
            $this->state["content"] .= $this->loadView("thankyou");

            $this->state["html"] = $this->loadView("template");
        }

        public function error(){

        }
    }
?>