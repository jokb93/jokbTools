<?php

session_start();

$objCon = new mysqli("localhost","mainUser","ch5YPhf6etes86Bb","eddo");
if($objCon->connect_error) {
die ($objCon->connect_error);
}

date_default_timezone_set("Europe/Paris");

$objCon->set_charset("utf8");

include 'functions.php';

function autoload ($classname) {

    $newname = strtolower($classname);
    $backs = "";
    $e = 1;
    $i = 0;

    while($i == 0||$e > 10){

        if(file_exists($backs."classes/".$newname.".php")){

            $i = 1;

            require_once($backs."classes/".$newname.".php");

        } else {

            $backs .= "../";

            $e++;

        }

    }
}

spl_autoload_register("autoload");

?>
