<!DOCTYPE html>
<html>
<head>
<title>Editar usuario</title>
<link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>
<body>
<h1>Editando usuario #<?= $user['id'] ?></h1>
<form method="post" action="<?= site_url('/user/update/' .$user['id']) ?>">
Nombre: <input type="text" name="name" value="<?= $user['name'] ?>"><br>
Email: <input type="text" name="email" value="<?= $user['email'] ?>"><br>
<button type="submit">Editar</button>
</form>
</body>
</html>