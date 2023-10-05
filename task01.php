<?php

function display_menu() {
    $menuItems = array(
        "Home" => "home.php", 
        "Products" => "product.php", 
        "About Us" => "about.php", 
        "Contact" => "contact.php"
    ); 

    $menuHTML = "<ul>"; 
    foreach($menuItems as $itemName => $itemLink) {
        $menuHTML .= '<li><a href="' . $itemLink . '">' . $itemName . '</a></li>';
    }
    $menuHTML .= '</ul>'; 
    return $menuHTML;
}