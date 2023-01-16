<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
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
<script>
      $(document).ready(function () {
            $("#formulario").validate();
      });
</script>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="validad.php" method="post" name="formulario" id="formulario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario" required ></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario "  ></td>
    </tr>

    <tr>
      <td>Contraseña:</td>
      <td><label for="contrasenna"></label>
      <input type="text" name="contrasenna" id="contrasenna" required ></td>
    </tr>
    <tr>
      <td> Confirmar Contraseña:</td>
      <td><label for="contrasenna_c"></label>
      <input type="text" name="contrasenna_c" id="contrasenna_c" equalTo="contrasenna" title="no coiciden"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
      
    </tr>
  </table>
</form>




</body>
</html>