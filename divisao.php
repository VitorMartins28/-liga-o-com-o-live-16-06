<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$divisao = $numero1 / $numero2;

$retornoJson = array( );

if ($divisao == 0) {
    $retornoJson["error"] = "Valor Invalido ou igual a zero";
}
else{
$retornoJson["operacao"] = "divisao";
$retornoJson["numero1"] = $numero1;
$retornoJson["numero2"] = $numero2;
$retornoJson["resultado"] = $divisao;

}
echo json_encode ($retornoJson);


?>
