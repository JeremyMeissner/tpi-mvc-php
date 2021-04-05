<?php
if (isset($action)) {
    switch ($action) {
        case 'all':
            require_once(ROOT . 'models/product.php');

            $product = new Product();
            $products = $product->findAll();
            $displayedPage = ROOT . 'views/products/list.php';

            break;
        case 'categorie':
            require_once(ROOT . 'models/product.php');

            $product = new Product();
            $products = $product->findAllByCategory($element);
            $displayedPage = ROOT . 'views/products/list.php';

            break;

        default:
            header("HTTP/1.0 404 Not Found");
            $displayedPage = ROOT . 'views/404.php';
            break;
    }

    require_once(ROOT . 'views/components/header.php');
    require_once($displayedPage);
    require_once(ROOT . 'views/components/footer.php');
}
