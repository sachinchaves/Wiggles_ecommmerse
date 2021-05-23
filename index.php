<?php
session_start();
include("libs/DB.php");

spl_autoload_register(function ($class_name) {
    $folders = array("models", "controllers", "views");
    foreach($folders as $folder)
    {
        if(file_exists($folder."/".$class_name.".php"))
        {
            include $folder."/".$class_name.".php";
        }
    }
});

//for GET
$controller = (isset($_GET["controller"])) ? $_GET["controller"] : "pages";
$action =  (isset($_GET["action"])) ? $_GET["action"] : "default";

//for POST
$controller = (isset($_POST["controller"])) ? $_POST["controller"] : $controller;
$action =  (isset($_POST["action"])) ? $_POST["action"] : $action;

if($controller){
    //capitialised name of the controller
    $controllerName = ucfirst($controller)."Controller";
    $controllerFile = "controllers/".$controllerName.".php";
    //check if file exists 
    if(file_exists($controllerFile)){
        include($controllerFile);
    }else{
        echo "the controller you asked for is invalid: $controllerFile";
        die;
    }
    
}

$oController = new $controllerName();

if(method_exists($oController, $action)){
    $oController->$action();
    if(method_exists($oController, "postTrip")){
        $oController->postTrip();
    }else {
        echo $oController->state["html"];
    }
}else{
    $oController->error();
}

?>