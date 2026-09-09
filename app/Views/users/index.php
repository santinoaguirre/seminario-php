<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
</head>
<body>
<h1>Lista de usuarios</h1>
<a href="<?= site_url('user/create') ?>">Agregar usuario</a>
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Acciones</th>
</tr>
<?php foreach ($users as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= esc($u['name']) ?></td>
<td><?= esc($u['email']) ?></td>
<td>
<a href="<?= site_url('/user/edit/' .$u['id']) ?>">Editar</a>
<a href="<?= site_url('/user/delete/' .$u['id']) ?>">Eliminar</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>