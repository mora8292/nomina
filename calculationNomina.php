<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/calculationNomina.css">
</head>

<body>
    <button class="button-option-menu" class="btn-information" id="btn-information" onclick="location.href='Diseño.html'">Regresar menu</button>

    <form action="guardar.php" method="post">
        <div id="container">
            <div class="tittle">
                <h3>Datos del empeado</h3>
            </div>
            <div id="containerDatesUser" class="containerD">
                <div class="subDate">
                    <label for="">Numero de empleado</label>
                    <label for="">Nombre</label>
                    <label for="">Apellido paterno</label>
                    <label for="">Apellido Materno</label>
                    <label for="">CURP</label>
                    <label for="">Correo</label>
                    <label for="">Telefono</label>
                </div>
                <div class="subDate">
                    <input type="number" name="nEmpleados" require>
                    <input type="text" name="name" require>
                    <input type="text" name="apellPat" require>
                    <input type="text" name="apellMat" require>
                    <input type="text" name="curp" require>
                    <input type="text" name="correo" require>
                    <input type="text" name="telefono" require>
                </div>
            </div>

            <div class="tittle">
                <h3>Datos en empresa</h3>
            </div>
            <div id="containerDatesCompany" class="containerD">
                <div class="subDate">
                    <label for="">Fecha de ingreso</label>
                    <label for="">RFC</label>
                    <label for="">NSS</label>
                    <label for="">Seguro social</label>
                    <label for="">Puesto</label>
                    <label for="">Tipo de pago</label>
                    <label for="">Factor de integracion</label>
                    <label for="">Dias trabajados</label>
                    <label for="">Salario</label>
                    <label for="">Dias de aguinaldo</label>
                    <label for="">Prima vacacional</label>
                    <label for="">Dias de vacaciones</label>
                    <label for="">ISR</label>
                </div>
                <div class="subDate">
                    <input type="date" class="fecha" min="1950-01-01" require>
                    <input type="text" name="rfc" require>
                    <input type="text" name="nss" require>
                    <input type="text" name="seguroSocial" require>
                    <input type="text" name="puesto" require>
                    <select name="tipoPago" id="">
                        <option value="1">Diario</option>
                        <option value="2">Semanal</option>
                        <option value="3">Quincenal</option>
                        <option value="4">Mensual</option>
                    </select>
                    <input type="text" name="factor" require>
                    <input type="number" name="diasTrabajados" require>
                    <input type="number" name="salario" require>
                    <input type="number" name="diasAguinaldo" require>
                    <input type="number" name="primaVacacional" require>
                    <input type="number" name="diasVacaciones" require>
                    <input type="text" name="isr" require>
                </div>
            </div>
        </div>
        <button type="submit">Subir datos</button </form>
    </body>
    <script src="js/calculationNomina.js"></script>

</html>

<!-- dividir el salario por 30, multiplicar eso por 15 -->

<!-- 15.000 / 30 = 500 pesos diarios.
500 x 15 = 7.500 pesos.
7.500 pesos es lo que recibirá el trabajador como aguinaldo navideño. -->

<!-- // $nombre = $_POST['name'];
// $apellPat = $_POST['apellPat'];
// $apellMat = $_POST['apellMat'];
// $curp = $_POST['curp'];
// $correo = $_POST['correo'];
// $telefono = $_POST['telefono'];

// $rfc = $_POST['rfc'];
// $nss = $_POST['nss'];
// $seguroSocial = $_POST['seguroSocial'];
// $puesto = $_POST['puesto'];
// $tipoPago = $_POST['tipoPago'];
// $factor = $_POST['factor'];
// $diasTrabajados = $_POST['diasTrabajados'];
// $diasAginaldo = $_POST['diasAguinaldo'];
// $primaVacacional = $_POST['primaVacacional'];
// $diasVacaciones = $_POST['diasVacaciones'];
// $isr = $_POST['isr']; -->


