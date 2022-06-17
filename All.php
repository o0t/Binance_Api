<?php 

    $url = 'https://api.binance.com/api/v3/ticker/price';

    $data = file_get_contents($url);

    $json = json_decode($data , true);

    echo "<pre>";
    print_r($json);
    echo "</pre>";

?>
