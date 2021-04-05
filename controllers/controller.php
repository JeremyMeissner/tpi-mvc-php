<?php
//https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19
# https://nouvelle-techno.fr/actualites/live-coding-introduction-au-mvc-en-php
$parameters = explode('/', filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING));

$requestedPage = empty($parameters[0]) ? 'index' : $parameters[0];

$displayedPage = "";

switch ($requestedPage) {
    case 'index.php':
    case 'index':
        # code...
        break;

    case 'product':
        require('../models/product.php');
        $product = new Product();
        $products = $product->findAllByCategory('com');
        $displayedPage = '../views/productList.php';
        break;

    case 'product':
        require('../models/product.php');
        $product = new Product();
        $products = $product->findAllByCategory('com');
        $displayedPage = '../views/productList.php';
        break;

    case 'logout':
        $_SESSION = array();
        session_destroy();
        header('Location: ./index');
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        $displayedPage = '../views/404.php';
        break;
}
