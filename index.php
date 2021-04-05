<?php
//https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19
# https://nouvelle-techno.fr/actualites/live-coding-introduction-au-mvc-en-php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

var_dump(ROOT);
$parameters = explode('/', filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING));


if (!empty($parameters[0])) {
    // Set the page
    $requestedPage = $parameters[0];
    // Set the action or the default action if empty
    $action = !empty($parameters[1]) ? $parameters[1] : "default";

    $element = !empty($parameters[2]) ? $parameters[2] : "";
} else {
    // Set the default page
    $requestedPage = "index";
}

$displayedPage = "";

switch ($requestedPage) {
    case 'index':
    case 'index.php':

        break;
    case 'product':
        require_once(ROOT . 'controllers/productsController.php');
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        $displayedPage = ROOT . 'views/404.php';
        break;
}
