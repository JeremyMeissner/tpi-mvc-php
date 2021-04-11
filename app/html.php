<?php
class HTML
{
    public static function render($displayedPage)
    {
        require_once(ROOT . 'views/components/header.php');
        require_once($displayedPage);
        require_once(ROOT . 'views/components/footer.php');
    }
}
