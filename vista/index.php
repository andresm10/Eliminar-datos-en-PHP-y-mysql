<?php
	require "../modelo/eliminar.php";
	$objConsulta = new Eliminar();
?>
<head>
<title>Consultar datos de una Base de Datos PHP-MYSQL</title>
</head>
<body bgcolor="#CCCCCC">
	<form method="post" action="../controlador/controlador.php" >
    <center>
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><b><i><!-- Eliminar datos de una Base de Datos PHP-MYSQL --></i></b></font>
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif"><!-- Autor: codigoweblibre.comli.com --></font>
    <br /><br />
    Codigo: <input type="text" name="codigo" id="codigo" value="" />
    <br />
    <input type="submit" name="consultar" id="consultar" value="Consultar" />
    <input type="submit" name="eliminar" id="eliminar" value="Eliminar" />
    </center>
        <?php
				$objConsulta->listar();	//esta funcion nos muestra los datos en pantalla de nuestra tabla usuarios, de la base de datos personas
		?>
    </form>
</body>
</html>