<?php 
switch ($_SERVER['REQUEST_URI']) {
    case '/all_ads':
        include 'ads.show.php';
        break;
    case '/new_ads':
        include 'ads.create.php';
        break;
    case '/new_user':
        include 'users.create.php';
        break;
    case '/new_character':
    	include 'character.create.php';
        break;   
    default:
        include 'auth.login.php';
        break;
}

