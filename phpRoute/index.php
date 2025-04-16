<?php
require_once(__DIR__."/path/paths.php");

header("Access-contol-Allow-origin: *");
header("accepts: Applications/JSON");

try {
    $uri = explode("/",$_SERVER['REQUEST_URI']);

    $controller = $uri[1]?? "";

    $method = $uri[2]?? "";

    $parameter = $uri[3]?? "";

    $router = new Router();

   echo $router->route($controller,$method,$parameter);

} catch (Exception $e) {
    //throw $th;
    $error = $e->getMessage();

    echo $error;
}

// var_dump($uri);