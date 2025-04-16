<?php

function route_url($controller,$method, $parameter = ""){
    
    if($parameter != ""){   //when parameter is given
        return "/$controller/$method/$parameter";
    } else{     // when parameter is not given
        return "/$controller/$method";
    }
}