<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cantantes</title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-950 via-purple-900 to-fuchsia-900 text-white">
    <div class="max-w-4xl mx-auto px-4 py-12">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-4xl font-extrabold">Lista de cantantes</h1>
            </div>
            <a href="<?= site_url('singer/create') ?>"
                class="bg-fuchsia-500 hover:bg-fuchsia-400 transition text-white font-semibold px-5 py-2.5 rounded-lg shadow-lg shadow-fuchsia-900/50">
                + Agregar cantante
            </a>
        </div>

        <div class="bg-white/10 backdrop-blur rounded-xl overflow-hidden shadow-2xl">
            <table class="w-full text-left">
                <thead class="bg-white/10">
                    <tr>
                        <th class="px-6 py-3 text-sm font-semibold text-fuchsia-200 uppercase">ID</th>
                        <th class="px-6 py-3 text-sm font-semibold text-fuchsia-200 uppercase">Nombre</th>
                        <th class="px-6 py-3 text-sm font-semibold text-fuchsia-200 uppercase">Nacionalidad</th>
                        <th class="px-6 py-3 text-sm font-semibold text-fuchsia-200 uppercase">Género</th>
                        <th class="px-6 py-3 text-sm font-semibold text-fuchsia-200 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <?php foreach ($singers as $s): ?>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 text-fuchsia-200"><?= $s['id'] ?></td>
                        <td class="px-6 py-4 font-medium"><?= esc($s['name']) ?></td>
                        <td class="px-6 py-4 text-white/80"><?= esc($s['nationality']) ?></td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-block bg-fuchsia-500/20 text-fuchsia-200 text-xs font-semibold px-3 py-1 rounded-full">
                                <?= esc($s['genre']) ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 space-x-3">
                            <a href="<?= site_url('/singer/edit/' . $s['id']) ?>"
                                class="text-indigo-300 hover:text-indigo-100 font-medium">Editar</a>
                            <a href="<?= site_url('/singer/delete/' . $s['id']) ?>"
                                onclick="return confirm('¿Eliminar a <?= esc($s['name']) ?>?')"
                                class="text-red-300 hover:text-red-100 font-medium">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php if (empty($singers)): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-white/60">No hay cantantes cargados
                            todavía.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>