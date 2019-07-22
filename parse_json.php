<?php

$data = file_get_contents("php://input");

$json = json_decode($data , true);
$variablesarray=array();
$realmsarray=array();
foreach ($json as $key => $value) {

    if (!is_array($value)) {
        echo "The $key is $value\n";
    } else {
        if($value=="realmNames")
        {
          $realmsarray=$value;
        }
        else
        {
          $variablesarray=$value;
        }
    }
}
?>