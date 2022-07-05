<?php

require_once "controllers/get.controller.php";

$table = explode("?", $routesArray[2])[0];

$select = $_GET["select"] ?? "*";

$response = new GetController();


 /* =============================================
    Consulta con filtros
    =============================================*/

if(isset($_GET["linkTo"]) && isset($_GET["equalTo"])){

    $response -> getDataFilter($table, $select,$_GET["linkTo"], $_GET["equalTo"]);

}else{
   /* =============================================
    Consulta sin filtros
    =============================================*/


    $response -> getData($table, $select);
}





