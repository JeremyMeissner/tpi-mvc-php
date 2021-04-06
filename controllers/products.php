<?php
if (isset($action)) {
    switch ($action) {
        case 'all':
            require_once(ROOT . 'models/products.php');

            $product = new Product();
            $products = $product->findAll();
            $displayedPage = ROOT . 'views/products/list.php';

            break;
        case 'categorie':
            require_once(ROOT . 'models/products.php');

            $product = new Product();
            $products = $product->findAllByCategory($element);
            $displayedPage = ROOT . 'views/products/list.php';

            break;

        default:
            header("HTTP/1.0 404 Not Found");
            $displayedPage = ROOT . 'views/404.php';
            break;
    }

    HTML::render($displayedPage);
}
