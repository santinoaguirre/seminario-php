<!DOCTYPE html>
<html>

<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>

<body>
    <h1 class="text-4xl text-blue-600 mb-6">Lista de usuarios</h1>
    <a href=" <?= site_url('user/create') ?>"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border-2 m-6">Agregar
        usuario</a>
    <table class="table-auto border-collapse border border-gray-400 gap-x-6 mt-6">
        <tr class="bg-gray-200">
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr class="border border-gray-400">
            <td><?= $u['id'] ?></td>
            <td><?= esc($u['name']) ?></td>
            <td><?= esc($u['email']) ?></td>
            <td>
                <a href="<?= site_url('/user/edit/' .$u['id']) ?>">Editar</a>
                <a href="<?= site_url('/user/delete/' .$u['id']) ?>"
                    class="text-red-500 hover:text-red-700">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>