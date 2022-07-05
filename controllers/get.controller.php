<?php

require_once "models/get.model.php";

class GetController{

    /* =============================================
    Peticion Get sin filtro
    =============================================*/


    static public Function getData($table, $select){
         
        $response = GetModel::getData($table, $select);
        
        $return = new GetController();
        $return -> fncResponse($response);

    }

    /* =============================================
    Peticion Get con filtro
    =============================================*/

    static public Function getDataFilter($table, $select, $linkTo, $equalTo){
         
        $response = GetModel::getDataFilter($table, $select, $linkTo, $equalTo);
        
        $return = new GetController();
        $return -> fncResponse($response);

    }

    /* =============================================
    Respuesta del controlador
    =============================================*/

    public function fncResponse($response){


    if(!empty($response)){
        $json = array(
            'status' => 200,
            'total' => count($response),
            'result' => $response
    
        );
    }else{

        $json = array(
            'status' => 404,
            'result' => 'Not Found'
    
        );

    }

    echo json_encode($json, http_response_code($json["status"]));

}
}