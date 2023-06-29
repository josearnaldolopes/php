<?php
// sitemap url or sitemap file
// $sitemap = 'https://bytenota.com/sitemap.xml';
// $sitemap = 'https://www.xnxx.com/sitemap_main.xml';
$sitemap = 'https://www.stuttcars.com/post-sitemap.xml';

// get sitemap content
$content = file_get_contents($sitemap);

// parse the sitemap content to object
$xml = simplexml_load_string($content);

// echo 'XML'.$content;

// retrieve properties from the sitemap object
foreach ($xml->url as $urlElement) {
    // get properties
    $url = $urlElement->loc;
    $lastmod = $urlElement->lastmod;
    $changefreq = $urlElement->changefreq;
    $priority = $urlElement->priority;

    // print out the properties
    echo 'url: '. $url . '<br>';
    echo 'lastmod: '. $lastmod . '<br>';
    echo 'changefreq: '. $changefreq . '<br>';
    echo 'priority: '. $priority . '<br>';

    echo '<br>---<br>';
}