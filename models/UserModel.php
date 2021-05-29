<?php

    class UserModel {

        static public function login($username, $password, $loginType) {
            $dbName = ($loginType == "adminUser") ? "users" : "customers";
            $redirectLink = ($loginType == "adminUser") ? "index.php?controller=pages&action=dashboard": "index.php?controller=cart&action=billingInfo";
            $sessionVal = ($loginType == "adminUser") ? "adminId" : "customerId";
            $con = DB::connect();
            $user = DB::fetchOne("SELECT * FROM $dbName WHERE username='". mysqli_real_escape_string($con, $username)."'");
            // return $user;
            echo "Error, Please fill in the correct details";
            if($user) {
                $_SESSION[$sessionVal] = $user["id"];
                $encPassword = $user["password"];
                $providedPassword = $_POST["password"];
                if(password_verify($providedPassword, $encPassword)){
                    header("location: $redirectLink");
                }else {
                    header("location: index.php?controller=pages&action=login&status=error");
                }
                
            } else {
                echo "Error, Please fill in the correct details";
                header("location: index.php?controller=pages&action=login&status=error");
            }
        
        }

        static public function register($firstName, $lastName, $phone, $username, $password, $address, $city, $province, $postalCode) {
            $con = DB::connect();
            $encPass = password_hash($password, PASSWORD_DEFAULT);
            DB::runQuery("INSERT INTO customers (`firstName`, `lastName`, `phone`, `username`, `password`) VALUES ('".$firstName."', '".$lastName."', '".$phone."', '".$username."', '".$encPass."', '".$address."', '".$city."', '".$province."', '".$postalCode."', '".$country."',)");
            $user = Db::fetchOne("SELECT * FROM customers WHERE username='".mysqli_real_escape_string($con, $username)."'");
            // var_dump($user);
            if($user) {
                // echo('reached');
                $_SESSION["customerId"] = $user["id"];
                // var_dump($_SESSION["customerId"]);
                header("location: index.php?controller=cart&action=processOrder");
            } else {
                header("location: register.php?error");
            }
        }

        public function saveInfo($firstName, $lastName, $instaUsername, $email) {
            DB::runQuery("INSERT INTO members (`firstName`, `lastName`, `instaUsername`, `email`) VALUES ('".$firstName."', '".$lastName."', '".$instaUsername."','".$email."')");
            header("location: index.php?controller=pages&action=thankyou");
        }

        static public function checkLoggedIn() {
            $user = DB::fetchOne("SELECT * FROM users WHERE id='".$_SESSION["adminId"]."'");
            if($user){
                return $user;
             } else {
                 header("location: index.php?controller=pages&action=login");
             }
        }

        static public function checkLoggedInCustomer() {
            $user = DB::fetchOne("SELECT * FROM customers WHERE id='".$_SESSION["CustomerId"]."'");
            if($user){
                header("location: index.php?controller=cart&action=billingInfo");
             } else {
                 header("location: index.php?controller=pages&action=login");
             }
        }

    }
?>