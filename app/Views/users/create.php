<!DOCTYPE html>
<html>
<head>
<title>Agregar usuario</title>
</head>
<body>
<h1>Formulario de creación</h1>
<form method="post" action="<?= site_url('user/store') ?>">
Nombre: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
<button type="submit">Guardar</button>
</form>
</body>
</html>