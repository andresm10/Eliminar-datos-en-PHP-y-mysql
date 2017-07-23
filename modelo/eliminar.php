<?php
		require "../conexion/conexion.php";

		class Eliminar{
			var $conn;
			var $conexion;
			function Eliminar(){
				$this->conexion = new  Conexion();
				$this->conn=$this->conexion->conectarse();
			}
			function listar(){
				$i=1;
				$sql="select * from usuarios";
				$rs=mysqli_query($this->conn,$sql); //tipo de conexion 2
				//$rs=mysql_query($sql,$this->conn); //tipo de conexion 1
				if(mysqli_num_rows($rs)<1){ //tipo de conexion 2
				//if(mysql_num_rows($rs)<1){ //tipo de conexion 1
					echo "<center><h3>No hay datos registrados.</h3></center>";
				}else{
				//echo "<table border='0' align='center'><tr><th>Codigo</th><th>Nombres</th><th>Apellidos</th><th>Tel&eacute;fono</th><th>Ciudad</th>";
				echo "<table border='1' align='center'><tr><th>&nbsp;&nbsp;</th><th>No Folio</th><th>ID Item</th>";
				while($datos=mysqli_fetch_array($rs)){ //tipo de conexion 2
				//while($datos=mysql_fetch_array($rs)){ //tipo de conexion 1
					/*echo "<tr><td>".$datos["codigo"]."</td>".
							  "<td>".$datos["nombres"]."</td>".
							  "<td>".$datos["apellidos"]."</td>".
							  "<td>".$datos["telefono"]."</td>".
							  "<td>".$datos["ciudad"]."</td>".
					"</tr>";*/
					echo "<tr><td><b>".$i++."&nbsp;</b></td>".
							  "<td>".$datos["nombres"]."</td>".
							  "<td>".$datos["apellidos"]."</td>".
					"</tr>";
				}
				echo "</table>";
					}
			}

			function eliminarDatos($codigo){
				//$sql="delete from usuarios where codigo = ".$codigo;
				$sql="delete from usuarios";
				$rs=mysqli_query($this->conn,$sql); //tipo de conexion 2
				//$rs=mysql_query($sql, $this->conn); //tipo de conexion 1
				if($rs){
					echo "<script>alert('Dato Eliminado correctamente');</script>";
					?>
						<script>location.href="../vista/index.php";</script>
					<?php
				}else{
					echo "<script>alert('No se pudo eliminar el usuario');</script>";
					?>
						<script>location.href="../vista/index.php";</script>
					<?php
				}
			}
		}
?>



