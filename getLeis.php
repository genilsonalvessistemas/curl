<?php
// variaveis 
$codigo_municipio = '5213103';
$codigo_unidade_gestora = '1768';

//Criando Comunicação cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_URL, "https://ws.tcm.go.gov.br/api/rest/colareService/" . $codigo_municipio . "/legislacoes");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$retorno = curl_exec($ch);
curl_close($ch);


$retorno = json_decode($retorno); //Ajuda a ser lido mais rapidamente

$j = count($retorno);

echo '<div class="ui padded">';
for ($i = 0; $i < $j; $i++) {
    if ($retorno[$i]->unidadeGestoraId == $codigo_unidade_gestora) {
        echo
        '<div class="ui message">
                        <div class="header">
                            ' . $retorno[$i]->ementa . '
                        </div>
                        <ul class="list">
                            <li>Ano: ' . $retorno[$i]->anoNorma . '</li>
                            <li>ID Colare: ' . $retorno[$i]->idEnvioColare . '</li>
                            <li>Link do PDF: ' . $retorno[$i]->arquivoPrincipalNorma . '</li>
                        </ul>
                    </div>';
    }
}
echo '</div>';