<?php
$pais = $_POST['editPais'];
$departamento = $_POST['editDepartamento'];
$Ciudad = $_POST['editCiudad'];
$Barrio = $_POST['editBarrio'];
$DirecciondeCasa = $_POST['editDirecciondeCasa'];

//$archivo = $_FILES['archivo']['tmp_name'];
//$nombreArchivo = $_FILES['archivo']['name'];
//move_uploaded_file($archivo, $nombreArchivo);
//$imagen = $nombreArchivo;
//$nom = "foto";
//$name = "name";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"type="text/css"href="Styles/estilos.css">
    </head>
    <body>
        <header>
            <img src="images/lugar.png"/>
            <h1> YOUR PLACES </h1>
        </header>
        <section id="lugares">
            <h4> LOS DATOS DATOS DE TU LUGAR SON </h4>
<!--            <section id="sFoto">
//<?php echo "<img id=" . $nom . " src=" . $imagen . ">"; ?>
            </section>-->
                <?php echo "<h3>País: " . $pais . "</h3>"; ?>
            <?php echo "<h3>Departamento/Región: " . $departamento . "</h3>"; ?>
            <?php echo "<h3>Ciudad: " . $Ciudad . "</h3>"; ?>
            <?php echo "<h3>Barrio: " . $Barrio . "</h3>"; ?>
            <?php echo "<h3>Direccion de Casa: " . $DirecciondeCasa . "</h3>"; ?>
        </section>
    </section>
    <footer>
        <h4> Contacto: </h4>
        <h4> Duvan Yahir Bernal Ráquira </h4>
        <h4> duvan.bernal@usantoto.edu.co </h4>
        <h4> Ingenieria de sistemas </h4>
        <h4> Usta Tunja </h4>
    </footer>
</body>
</html>