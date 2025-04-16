<?php

class display{
    public function view($nameOffile,$folder = null)
    {
        if($folder === null){    //if folder is not given
            require(__DIR__."/../views/$nameOffile.php");
        } else{
            require(__DIR__."/../views/user/$folder/$nameOffile.php");
            // echo "it is hitting";
        }
    }
}