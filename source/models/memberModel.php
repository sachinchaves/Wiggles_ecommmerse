<?php

    class memberModel {

        static public function getAll(){
            $details = DB::fetchAll("SELECT * FROM members");
            return memberModel::dataFactory($details);
        }

        static public function dataFactory($details){
            foreach($details as &$detail){
                $detail = new dataModel($detail["id"], $detail["firstName"],$detail["lastName"],$detail["instaUsername"],$detail["email"]);
            }

            return $details;

        }

    }
?>