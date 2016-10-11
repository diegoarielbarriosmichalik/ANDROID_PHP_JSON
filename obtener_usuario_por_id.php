<?php

require 'Usuarios.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $pass = $_GET['pass'];
        $retorno = Usuarios::getByNamePass($nombre, $pass);

        if ($retorno) {
            $x["estado"] = 1;		
            $x["usuario"] = $retorno;
            print json_encode($x);
        } else {
            print json_encode(
                array(
                    'estado' => '2',
                    'mensaje' => 'No se obtuvo el registro'
                )
            );
        }
    } else {
        print json_encode(
            array(
                'estado' => '3',
                'mensaje' => 'Se necesita un identificador'
            )
        );
    }
}

