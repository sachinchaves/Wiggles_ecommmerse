<?php

    class UserModel {

        static public function login($username, $password) {
            $oDB = new DB();
            $user = DB::fetchOne("SELECT * FROM users WHERE username='". mysqli_real_escape_string($oDB->connect(), $username)."'");
            // return $user;
            echo "Error, Please fill in the correct details";
            if($user) {
                $_SESSION["id"] = $user["id"];
                $encPassword = $user["password"];
                $providedPassword = $_POST["password"];
                if(password_verify($providedPassword, $encPassword)){
                    header("location: index.php?controller=pages&action=dashboard");
                }else {
                    header("location: index.php?controller=pages&action=login&status=error");
                }
                
            } else {
                echo "Error, Please fill in the correct details";
                header("location: index.php?controller=pages&action=login&status=error");
            }
        
        }

        public function register($username, $password) {
            $encPass = password_hash($password, PASSWORD_DEFAULT);
            DB::runQuery("INSERT INTO users (username, password) VALUES ('".$username."', '".$encPass."')");
            header("location: index.php?controller=pages&action=dashboard");
        }

        public function saveInfo($firstName, $lastName, $instaUsername, $email) {
            DB::runQuery("INSERT INTO members (`firstName`, `lastName`, `instaUsername`, `email`) VALUES ('".$firstName."', '".$lastName."', '".$instaUsername."','".$email."')");
            header("location: index.php?controller=pages&action=thankyou");
        }

        static public function checkLoggedIn() {
            $user = fetchOne("SELECT * FROM users WHERE id='".$_SESSION["id"]."'");
            if($user){
                return $user;
             } else {
                 header("location: index.php?controller=pages&action=login");
             }
        }

    }
?>