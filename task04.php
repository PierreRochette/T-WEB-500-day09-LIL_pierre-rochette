<?php

function whoami() {
    $name = $_POST["name"] ?? null; 
    $age = $_POST["age"] ?? null; 

    if (empty($name)) {
        if(empty($age)) {
            echo "Hi, I have no name."; 
        } else {
            echo "Hi, I have no name and I'm $age years old."; 
        }
    } else {
        if(!is_numeric($age)) {
            echo "Hi, my name is $name."; 
        } else {
            echo "Hi, my name is $name and I'm $age years old."; 
        }
    }
}
?>