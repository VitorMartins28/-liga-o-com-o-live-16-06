<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];

$retornoJson = array( );

if ($numero1 > $numero2) {
    $retornoJson["maior"] = "Numero 1 maior";
    $retornoJson["numero1"] = $numero1;

}
else{
    $retornoJson["maior"] = "Numero 2 maior";
    $retornoJson["numero2"] = $numero2;

}

echo json_encode ($retornoJson);
?>
