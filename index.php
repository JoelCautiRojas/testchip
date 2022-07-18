<?php

    $rows = $_GET["rows"];
    $data = array(
                "tasas"=>array(
                    array(
                        "name"=>"ACADEMIA DE LA MAGISTRATURA",
                        "id"=>"29-0",
                        "operation"=>"29",
                        "txn"=>"0",
                        "tramites"=>array(
                            array(
                                "name"=>"Pagos de la Academia de la Magistratura",
                                "id"=>"14-4",
                                "operation"=>"14",
                                "txn"=>"4"
                            )
                        )
                    ),
                    array(
                        "name"=>"ESSALUD",
                        "id"=>"26-0",
                        "operation"=>"26",
                        "txn"=>"0",
                        "tramites"=>array(
                            array(
                                "name"=>"Pago de aportes a ESSALUD",
                                "id"=>"13-4",
                                "operation"=>"13",
                                "txn"=>"4"
                            )
                        )
                    )
                )
            );
    if($rows == ""){
        header('Content-Type: application/json');
        echo json_encode($data,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }else{
        $res = array();
        for($i = 1; $i <= $rows; $i++){
            $rw = array(
                "name"=>"TASA DE PRUEBA ".$i,
                "id"=>$i."-0",
                "operation"=>$i,
                "txn"=>"0",
                "tramites"=>array(
                    array(
                        "name"=>"Pagos de tramite de prueba",
                        "id"=>"xx-x",
                        "operation"=>"xx",
                        "txn"=>"x"
                    ),
                    array(
                        "name"=>"Pagos de tramite de prueba",
                        "id"=>"xx-x",
                        "operation"=>"xx",
                        "txn"=>"x"
                    )
                )
            );
            array_push($res,$rw);
            $respuesta = array("tasas" => $res);
            header('Content-Type: application/json');
            echo json_encode($respuesta,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        }
    }
?>