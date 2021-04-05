<pre>
<?php
foreach ($products as $key => $value) {
    echo <<<EOL
<article>
<img src="{$value->getImage()}" alt="{$value->getImage()}">
<p>{$value->getDescription()}</p>
<p>{$value->getPrix()}</p>
</article>
EOL;
}
?>
</pre>