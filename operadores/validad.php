
<style>.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}

</style>

<?php
if (isset($_POST["enviando"])) {



	$edad=$_POST["edad_usuario"];
	$nombre=$_POST["nombre_usuario"];

	$resultado= $edad>18 && $nombre=="juan"?"puede ingresar ".$nombre:"No puedes ingresar";
	echo"$resultado";




//   $nombre=$_POST["nombre_usuario"];
//   $edad=$_POST["edad_usuario"];
//   if($nombre=="juan"&&$edad>18){
//     echo "<p class='validado'> Puedes ingresar</p>";
//   }else{
//     echo "<p class='no_validado'>No Puedes ingresar</p>";
//   }
 
}
?>