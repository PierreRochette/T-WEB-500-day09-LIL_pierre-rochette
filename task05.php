<?php 

function form_is_submitted () {
    return isset($_POST['submit']); 
}

function whoami() {

    $format = array(
        "pge" => "PGE (Programme Grande Ecole)", 
        "msc" => "MSc Pro", 
        "coding" => "Coding Academy", 
        "wac" => "Web@cademie"
    ); 

    $name = $_POST["name"] ?? null; 
    $age = $_POST["age"] ?? null; 
    $curriculum = $_POST["curriculum"] ?? null; 
    $message = "Hi, "; 

    if (empty($name)) {
        if(empty($age)) {
            $message .= "I have no name."; 
        } else {
            $message .= "I have no name and I'm $age years old."; 
        }
    } else {
        if(!is_numeric($age)) {
            $message .= "my name is $name."; 
        } else {
            $message .= "my name is $name and I'm $age years old."; 
        }
    }

    if (!empty($curriculum) && isset($format[$curriculum])) {
        $message .= " I'm a student of $format[$curriculum]."; 
    }

    echo $message; 
}