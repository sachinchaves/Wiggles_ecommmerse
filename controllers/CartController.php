<?php
    class CartController extends Controller {
        public function addItemToCart() {
            CartModel::addItemToCart($_GET["productId"]);
            header("location: index.php?controller=pages&action=checkout");
        }

        public function checkout() {
            $this->state["pageTitle"] = "Cart Contents";
            $this->state["browserTitle"] = "Your Cart Contents";
            $this->state["content"] = $this->loadView("navbar");
            $this->state["content"] .= $this->loadView("cart_contents");
            $this->state["html"] = $this->loadView("template");
        }

        public function error(){

        }
    }
?>