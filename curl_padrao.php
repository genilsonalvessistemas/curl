<?php

// $curl = curl_init("http://192.168.1.72");
$curl = curl_init("https://debit.com.br/tabelas/ipca-indice-nacional-de-precos-ao-consumidor-amplo.php"); // conecta na pagina
$grava_arquivo = fopen("transicao_curl.html", "w"); // cria um arquivo e da permissão

// opções do curl para pegar o arquivo, e aplicar ssl etc....
curl_setopt($curl, CURLOPT_FILE, $grava_arquivo);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

// executa o curl
curl_exec($curl);
if (curl_error($curl)) { // verifica se existe
    fwrite($grava_arquivo, curl_error($curl)); // escreve no arquivo e tiver erro beleza
}
curl_close($curl);  // fehca a execução do curl
fclose($grava_arquivo); // para de escrever no arquivo