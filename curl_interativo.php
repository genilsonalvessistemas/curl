<?php

//$url_simples = 'https://www.php.net/manual/pt_BR/book.outcontrol.php';

$site_url = $_GET['url'] ?? null;

if ($site_url) {
    $curl = curl_init(); // variavel que inicia o curl
    $timeout = 5; // determina o tempo de execução maxima de uma função, premptiva
    curl_setopt($curl, CURLOPT_URL, $site_url);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    ob_start();
    curl_exec($curl);
    curl_close($curl);
    $file_contents = ob_get_contents();
    ob_end_clean();

    echo $file_contents;
} else {
    echo 'URL not a default';
}

// if ($site_url) {
//     $curl = curl_init(); // variavel que inicia o curl
//     $timeout = 5; // determina o tempo de execução maxima de uma função, premptiva
//     curl_setopt($curl, CURLOPT_URL, $site_url);
//     curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

//     ob_start();
//     curl_exec($curl);
//     curl_close($curl);
//     $file_contents = ob_get_contents();
//     ob_end_clean();

//     echo $file_contents;
// } else {
//     echo 'URL not a default';
// }