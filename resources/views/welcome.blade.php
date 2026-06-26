<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind v4 Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg text-center">
        <h1 class="text-5xl font-extrabold text-blue-500 mb-4">Tailwind v4 Berjalan!</h1>
        <p class="text-gray-600 text-xl leading-relaxed">
            Jika kamu melihat tampilan ini dengan warna biru dan rounded card,<br>
            berarti Tailwind sudah aktif.
        </p>
    </div>
</body>
</html>
