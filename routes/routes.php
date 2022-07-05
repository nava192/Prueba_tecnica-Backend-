<?php

$routesArray = explode("/",$_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
/* =============================================
Cuando no se hace peticion a la Api
=============================================*/
if(count($routesArray) == 0){
    $json = array(
        'status' => 404,
        'result' => 'Not found'
    );
echo json_encode($json, http_response_code($json["status"]));
return;
}
/* =============================================
Cuando si se hace peticion a la Api
=============================================*/
if(count($routesArray) == 2 && isset($_SERVER['REQUEST_METHOD'])){

    /* =============================================
    Peticion Get
    =============================================*/
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        include "services/get.php"; 
    }

    /* =============================================
    Peticion POST
    =============================================*/
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud POST'
        );
        echo json_encode($json, http_response_code($json["status"]));
        return;  
    }
    /* =============================================
    Peticion PUT
    =============================================*/
    if($_SERVER['REQUEST_METHOD'] == "PUT"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud PUT'
        );
    echo json_encode($json, http_response_code($json["status"]));
    return;  
    }
    /* =============================================
    Peticion DELETE
    =============================================*/
    if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud DELETE'
        );
    echo json_encode($json, http_response_code($json["status"]));
    return;  
    }
}
