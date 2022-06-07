<?php
$user= "root";
$clave= "";
$bd="nomina";
$mysqli = new mysqli("localhost", $user, $clave, $bd);

$query = "SELECT * FROM datosempresaempleados AS DEE
INNER JOIN datospersonalesempleados AS prueba
    ON DEE.idDatosEmpresa = prueba.idDatosEmpresa";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["idDatosEmpresa"];
        $field2name = $row["rfc"];
        $field3name = $row["nss"];
        $field4name = $row["seguroSocial"];
        $field5name = $row["puesto"];
        $field6name = $row["tipoPago"];
        $field7name = $row["factor"];
        $field8name = $row["diasTrabajados"];
        $field9name = $row["DiasAguinaldos"];
        $field10name = $row["diasVacaciones"];
        $field11name = $row["primaVacacional"];
        $field12name = $row["isr"];
        $field13name = $row["salario"];

        $field14name= $row['idEmpleado'];
        $field15name=$row['idDatosEmpresa'];
        $field16name=$row['nombre'];
        $field17name=$row['apellPat'];
        $field18name=$row['apellMat'];
        $field19name=$row['curp'];
        $field20name=$row['correo'];
        $field21name=$row['telefono'];

        echo '<b>'.$field1name.' '.$field2name.' '.$field3name.' '.$field4name.' '.$field5name.' '.$field6name.' ',$field7name.' '.$field8name.' '.$field9name.' '.$field10name.' '.$field11name.' '.$field12name.' '.$field13name.'</b><br> <br> <br>';

        echo '<b>'.$field14name.' '.$field15name.' '.$field16name.' '.$field17name.' '.$field18name.' '.$field19name.' '.$field20name.' '.$field21name.'</b><br> <br> <br>';
    }

/*freeresultset*/
$result->free();
}