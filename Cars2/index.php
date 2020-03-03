<?php

define('APPLICATION', 'Application/');
require_once APPLICATION.'functions.php';


$configPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';

switch ( $page )
{
    case 'cars': require_once APPLICATION.'Core/cars.php'; break;
    case 'allTenants': require_once APPLICATION.'Core/allTenants.php'; break;
    case 'modifyCar': require_once APPLICATION.'Core/modifyCar.php'; break;
    case 'update': require_once APPLICATION.'Core/update.php'; break;
    case 'deleteCar': require_once APPLICATION.'Core/deleteCar.php'; break;

    case 'regularCostumers': require_once APPLICATION.'Core/regularCostumers.php';    
}




require_once APPLICATION.'Templates/_layout.php';