<?php
//https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19
$parameters = explode('/', filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING));

$requestedPage = empty($parameters[0]) ? 'index' : $parameters[0];

$displayedPage = "";

switch ($requestedPage) {
    case 'index.php':
    case 'index':
        # code...
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        $displayedPage = 'views/404.php';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php
    require('views/components/header.php');
    require($displayedPage);
    require('views/components/footer.php');
    ?>
</body>

</html>