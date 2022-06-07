<?php

require 'conexion.php';

$numeroEmpleado = $_POST['nEmpleados'];
$nombre = $_POST['name'];
$apellPat = $_POST['apellPat'];
$apellMat = $_POST['apellMat'];
$curp = $_POST['curp'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$rfc = $_POST['rfc'];
$nss = $_POST['nss'];
$seguroSocial = $_POST['seguroSocial'];
$puesto = $_POST['puesto'];
$tipoPago = $_POST['tipoPago'];
$factor = $_POST['factor'];
$diasTrabajados = $_POST['diasTrabajados'];
$salario = $_POST['salario'];
$diasAginaldo = $_POST['diasAguinaldo'];
$primaVacacional = $_POST['primaVacacional'];
$diasVacaciones = $_POST['diasVacaciones'];
$isr = $_POST['isr'];

// Variables de calculos
$aguinaldoCalculado = calcularAguinaldo($salario, $diasAginaldo);
$factorIntegracionCalculado = calcularFactorIntegracion($diasAginaldo, $diasVacaciones, $primaVacacional);
$primaVacacionalCalculada = calcularPrimaVacacional($salario, $diasVacaciones);

// $insertar="INSERT INTO datospersonalesempleados VALUES ('','$numeroEmpleado','$nombre','$apellPat','$apellMat','$curp','$correo','$telefono')";

// $insertar1="INSERT INTO datosempresaempleados VALUES ('','$rfc','$nss','$seguroSocial','$puesto','$tipoPago','$factor','$diasTrabajados','$diasAginaldo','$primaVacacional','$diasVacaciones','$isr','$salario')";

// $query=mysqli_query($conn, $insertar);
// $quer1=mysqli_query($conn, $insertar1);

// if($query && $quer1){

//     echo "<script> console.log('correcto');
//     alert('correcto');
//      </script>";
// }
// else{
//     echo "<script> console.log('incorrecto');
//     alert('incorrecto');
//      </script>";
// }


function calcularAguinaldo($salario, $diasAginaldo)
{
    $respuesta1 = ($salario / 30) * $diasAginaldo;
    return $respuesta1;
}

function calcularPrimaVacacional($salario, $diasVacaciones)
{
    $respuesta2 = (($salario / 30) * $diasVacaciones) * .25;
    return $respuesta2;
}

function calcularFactorIntegracion($diasAginaldo, $diasVacaciones, $primaVacacionalCalculada)
{
    $respuesta3 = (365 + $diasAginaldo + $diasVacaciones + $primaVacacionalCalculada) / 365;
    return $respuesta3;
}

message($aguinaldoCalculado, $factorIntegracionCalculado, $primaVacacionalCalculada);

function message($aguinaldoCalculado, $factorIntegracionCalculado, $primaVacacionalCalculada) {
    echo '<script">alert("Data has been submitted to ' . $aguinaldoCalculado .' || '.  $factorIntegracionCalculado.' || '.$primaVacacionalCalculada. '");</script>';
}

?>