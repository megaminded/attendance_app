<?php

class Router extends Routing{

    public function route($controller,$method,$parameter)
    {
        // echo "we are hitting route lets go";


        if($this->controllerFileExits($controller)){
            if($this->controllerMethodExists($controller,$method)){

                switch($controller){
                    case "attendance":
                        // echo "this is the attendance controller<br>";
                        // var_dump($parameter);
                        // exit;
                        echo $this->showPages($controller,$method,$parameter);
                    break;

                    case "user":
                        echo $this->showPages($controller,$method,$parameter);
                    break;
                }  
            } else{
                // throw new Exception ("Method does not exist oo");
                $display = new display();
                return $display->view("404");
            }
        } else{
            if(empty($controller)){
                header("location: attendance/home");
            } else{
                // throw new Exception("file does not exist ooo");
                $display = new display();
                return $display->view("404");
            }
        }
    }
}