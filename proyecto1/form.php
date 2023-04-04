<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
 <form action="procesar_formulario.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre"><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email"><br>

<label for="mensaje">Mensaje:</label>
<textarea id="mensaje" name="mensaje"></textarea><br>

<input type="submit" value="Enviar">
</form>

</body>
</html>