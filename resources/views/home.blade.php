<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas HKBP Nommensen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Universitas HKBP Nommensen</h1>
        </div>
    </header>

    <!-- Sejarah Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Sejarah</h2>
            @if($history)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="prose max-w-none mb-6">
                        {!! $history->content !!}
                    </div>
                    @if($history->image && is_array($history->image) && count($history->image) > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($history->image as $img)
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $img) }}" alt="Sejarah" class="w-full h-64 object-cover rounded-lg">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @else
                <p class="text-gray-600">Belum ada data sejarah.</p>
            @endif
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Visi & Misi</h2>
            @if($visimisi)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-3 text-blue-900">Visi</h3>
                        <div class="prose max-w-none">
                            {!! $visimisi->visi !!}
                        </div>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-3 text-blue-900">Misi</h3>
                        <div class="prose max-w-none">
                            {!! $visimisi->misi !!}
                        </div>
                    </div>
                    @if($visimisi->image && is_array($visimisi->image) && count($visimisi->image) > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($visimisi->image as $img)
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $img) }}" alt="Visi Misi" class="w-full h-64 object-cover rounded-lg">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @else
                <p class="text-gray-600">Belum ada data visi misi.</p>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Universitas HKBP Nommensen</p>
        </div>
    </footer>
</body>
</html>
