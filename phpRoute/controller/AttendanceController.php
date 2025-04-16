<?php

class AttendanceController{

    public function home($parameter)
    {
        if($parameter != ""){   //When parameter is given
            echo "parameter is given";
            var_dump($parameter);
        } else{         //when parameter is not giveen
            $display = new display();
            echo $display->view("home");
            
        }

    }

    public function about($parameter)
    {
        if($parameter != ""){   //When parameter is given
            echo "parameter is given";
            var_dump($parameter);
        } else{         //when parameter is not giveen
            $display = new display();
            echo $display->view("about");
            
        }
    }

    public function login($parameter)
    {
        if($parameter != ""){   //When parameter is given
            echo "parameter is given";
            var_dump($parameter);
        } else{         //when parameter is not giveen
            $display = new display();
            echo $display->view("login");
            
        }
    }

    public function registration($parameter)
    {
        if($parameter != ""){   //When parameter is given
            echo "parameter is given";
            var_dump($parameter);
        } else{         //when parameter is not giveen
            $display = new display();
            echo $display->view("registration");
            
        }
    }
}