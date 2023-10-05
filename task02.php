<?php

function render_body(string $pageName) {

    switch ($pageName) {

        case 'home':
            $content = file_get_contents('home.html'); 
            return $content;
            break; 
        case 'sql' :
            $content = file_get_contents('sql.html'); 
            return $content;
            break; 
        case 'php' :
            $content = file_get_contents('php.html'); 
            return $content;
            break; 
        default :
            $content = "<p>Unknown page</p>"; 
            return $content;
    }

}