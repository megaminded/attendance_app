<?php

//paths to abstract folder

include(__DIR__."/../abstract/AbstractRouting.php");

//Paths to config folder
include(__DIR__."/../config/dbConfig.php");
include(__DIR__."/../config/routing.php");
include(__DIR__."/../config/router.php");
include(__DIR__."/../config/display.php");

//paths to connection folder
include(__DIR__."/../connection/DbConnection.php");

//paths to model folder
include(__DIR__."/../models/userModel.php");
include(__DIR__."/../models/loginModel.php");

//paths to controller folder
include(__DIR__."/../controller/filecontroller.php");
include(__DIR__."/../controller/signUpController.php");
include(__DIR__."/../controller/userController.php");
include(__DIR__."/../controller/logincontroller.php");
include(__DIR__."/../controller/AttendanceController.php");

//paths to library folder

include(__DIR__."/../library/route_uri.php");