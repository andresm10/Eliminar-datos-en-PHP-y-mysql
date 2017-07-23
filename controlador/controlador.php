
<?php 			
			require "../modelo/eliminar.php";
			$objEliminar = new Eliminar();	
			if(isset($_POST["consultar"])){
				header("Location: ../vista/index.php");
			}
			if(isset($_POST["eliminar"]) && isset($_POST["codigo"])){ //si presiono el boton eliminar ejecuta la funcion eliminarDatos()
				$objEliminar->eliminarDatos($_POST["codigo"]);			
			}
									
?>
	