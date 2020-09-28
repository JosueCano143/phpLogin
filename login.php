<html>
<head>
  <title>Ejercicio 3</title>
</head>
<body>
  <h2>Teclea un usuario y una contraseña</h2>
      <form name="contraseña" method="post">
        <p>Usuario<input type="text" name="name">
        <p>Contraseña<input type="password" name="pass">
        <input type="submit" value="Entrar" name="comprobar">
      </form>
</body>
</html>

<?php
	session_start();
	
	if (isset($_POST["name"]) && isset($_POST["pass"])) {

		if (!isset($_SESSION["intentos"]))
			$_SESSION["intentos"] = 0;
			
		if ($_SESSION["intentos"] < 3)
		{
			$name = $_POST["name"];
			$pass = $_POST["pass"];
			
			if ($name = "user1" && $pass == "pass1") {
				echo "C O N T E N I D O S del S I T I O 1 . . .";
			}
			else {
				echo "Usuario o contraseña incorrectos, intente de nuevo";
				$_SESSION["intentos"] = $_SESSION["intentos"] + 1;
			}	
		}
		else {
			echo "Su cuenta ha sido bloqueada, ha utilizado los 3 intentos";
		}
	}
?>