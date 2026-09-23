<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar cantante</title>
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-950 via-purple-900 to-fuchsia-900 text-white flex items-center justify-center">
    <div class="w-full max-w-md bg-white/10 backdrop-blur rounded-xl shadow-2xl p-8">
        <p class="text-fuchsia-300 text-sm uppercase tracking-widest mb-1">🎤 Nuevo registro</p>
        <h1 class="text-2xl font-bold mb-6">Agregar cantante</h1>

        <form method="post" action="<?= site_url('singer/store') ?>" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-white/80 mb-1">Nombre</label>
                <input type="text" name="name" required
                    class="w-full rounded-lg bg-white/10 border border-white/20 px-4 py-2 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-fuchsia-400"
                    placeholder="Ej: Shakira">
            </div>
            <div>
                <label class="block text-sm font-medium text-white/80 mb-1">Nacionalidad</label>
                <input type="text" name="nationality" required
                    class="w-full rounded-lg bg-white/10 border border-white/20 px-4 py-2 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-fuchsia-400"
                    placeholder="Ej: Colombia">
            </div>
            <div>
                <label class="block text-sm font-medium text-white/80 mb-1">Género musical</label>
                <input type="text" name="genre" required
                    class="w-full rounded-lg bg-white/10 border border-white/20 px-4 py-2 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-fuchsia-400"
                    placeholder="Ej: Pop">
            </div>

            <div class="flex items-center justify-between pt-2">
                <a href="<?= site_url('singer') ?>" class="text-white/60 hover:text-white text-sm">← Volver al
                    listado</a>
                <button type="submit"
                    class="bg-fuchsia-500 hover:bg-fuchsia-400 transition text-white font-semibold px-5 py-2.5 rounded-lg shadow-lg shadow-fuchsia-900/50">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>

</html>
