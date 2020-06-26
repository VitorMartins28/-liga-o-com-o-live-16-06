<?php
$cor = $_REQUEST["cor"];

$retornoJson = array( );
$retornoJson["escolha"] = "Digite uma cor:  azul, vermelho, amarelo ou verde";

switch ($cor) {
        case 'azul':
            $retornoJson["azul"] = "blue";
            $retornoJson["cor"] = $cor;
        break;
        case 'vermelho':
            $retornoJson["vermelho"] = "red";
            $retornoJson["cor"] = $cor;
        break;     
         case 'amarelo':
            $retornoJson["amarelo"] = "yellow";
            $retornoJson["cor"] = $cor;
        break;     
         case 'verde':
            $retornoJson["verde"] = "green";
            $retornoJson["cor"] = $cor;
        break;
        default:
        $retornoJson["error"] = "Cor invalida";
    break;
    }
    echo json_encode ($retornoJson);

?>
