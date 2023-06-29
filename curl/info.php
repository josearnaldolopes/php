<?php
$url = "https://docs.github.com";

function info($url) {
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_HEADER, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    // curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );

    $content = curl_exec( $ch );
    $info = curl_getinfo( $ch );

    curl_close($ch);
    return var_dump($info);
}

echo info($url);
