
<?php
$numero1 = $_REQUEST["numero1"];

$retornoJson = array( );

if ($numero1 % 2 == 0) {
    $retornoJson["numero"] = "par";
    $retornoJson["numero1"] = $numero1;
}
else{
    $retornoJson["numero"] = "impar";
    $retornoJson["numero1"] = $numero1;
}

echo json_encode ($retornoJson);
?>
