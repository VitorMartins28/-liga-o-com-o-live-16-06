<?php
$numero1 = $_REQUEST["numero1"];

$retornoJson = array( );

if ($numero1 > 0) {
    $retornoJson["positivo"] = "positivo";
    $retornoJson["numero1"] = $numero1;
}
else{
    $retornoJson["negativo"] = "negativo";
    $retornoJson["numero1"] = $numero1;
}

echo json_encode ($retornoJson);
?>
