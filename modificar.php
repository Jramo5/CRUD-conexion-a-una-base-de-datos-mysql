<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con = retornarConexion();


mysqli_query($con, "update empleados set user='$params->user',
                                          password=$params->password,
                                          last_names='$params->last_names',
                                          names='$params->names',
                                          position='$params->position'
                                          where codigo=$params->codigo");


class Result
{
}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = 'datos modificados';

header('Content-Type: application/json');
echo json_encode($response);
?>