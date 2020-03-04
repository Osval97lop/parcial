<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<center>
<h1>Formulario ingresar nuevo</h1>
    <form action="respuestadatos.php" method="post"><!--subira el nommbre nuevo a respuesta y mostrara ambos nombres-->
         nombre alumno:
        <input type="text" name="nombre">
         nombre maestro:
        <input type="text" name="fecha">
         grado:
        <input type="text" name="nit">
         tipo Asistencia:
        <input type="text" name="nombre">
          <!--campos para agregar nuevo nombre-->
        <input type="submit" value="ok"><!--boton para subir el nombre nuevo, con boton de okay-->
    </form>
    </center>
    </fieldset>
</body>
</html>