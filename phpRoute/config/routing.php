<?php

class Routing extends AbstractRouting{

    protected function controllerMethodExists($controller, $method)
    {
        $objectName = $controller."Controller";

        $object = new $objectName;
        if(method_exists($object,$method)){
            return true;
        } 
    }

    protected function controllerFileExits($controller)
    {
        $fileName = $controller."Controller";

        $path = __DIR__."/../controller/$fileName.php";

        if(file_exists($path)){
            return true;
        }
    }

    protected function showPages($controller,$method,$parameter)
    {
        $objectName = $controller."Controller";

        $object = new $objectName();

        return $object->$method($parameter);
    }
}