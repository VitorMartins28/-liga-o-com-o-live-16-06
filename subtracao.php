<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];

$subtracao = $numero1 - $numero2;

$retornoJson = array( );

$retornoJson["operacao"] = "subtracao";
$retornoJson["numero1"] = $numero1;
$retornoJson["numero2"] = $numero2;
$retornoJson["resultado"] = $subtracao;

echo json_encode ($retornoJson);
?>
