<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$numero3 = $_REQUEST["numero3"];

$soma = $numero1 + $numero2 + $numero3;

$retornoJson = array( );

$retornoJson["operacao"] = "soma";
$retornoJson["numero1"] = $numero1;
$retornoJson["numero2"] = $numero2;
$retornoJson["numero3"] = $numero3;
$retornoJson["resultado"] = $soma;

echo json_encode ($retornoJson);
?>
