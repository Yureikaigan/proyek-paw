<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Room - SamaSama</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen">

<div class="w-[1080px] h-[1920px] mx-auto bg-gray-700 flex flex-col">
    <!-- Navbar -->
    <nav class="flex items-center justify-between px-4 py-3 border-b border-gray-700 relative bg-gray-900">
        <!-- Burger -->
        <div class="w-10 h-10 flex items-center justify-center">
            <a href="{{ route('landingpage') }}" class="text-white text-2xl">&#8592;</a>
        </div>

        <!-- Logo tengah -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <img src="{{ asset('images/logosamasama.png') }}" alt="SamaSama Logo" class="h-10">
        </div>

        <!-- Kosong biar balance -->
        <div class="w-10 h-10"></div>
    </nav>

    <!-- Form -->
    <div class="p-6 overflow-y-auto space-y-6">
        <h1 class="text-2xl font-bold">Buat Room Baru</h1>

        <form action="{{ route('rooms.store') }}" method="POST" class="space-y-4">
            @csrf

            @if ($errors->any())
                <div class="text-red-400">
                    <ul class="text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="name" class="block mb-1">Nama Room</label>
                <input type="text" name="name" required class="w-full text-black rounded px-3 py-2">
            </div>

            <div>
                <label for="date" class="block mb-1">Tanggal</label>
                <input
                    type="date"
                    name="date"
                    value="{{ now()->format('Y-m-d') }}"
                    required
                    class="w-full text-black rounded px-3 py-2"
                >
            </div>

            <div>
                <label for="category" class="block mb-1">Kategori</label>
                <select name="category" class="w-full text-black rounded px-3 py-2" required>
                    <option value="Belajar Bersama">Belajar Bersama</option>
                    <option value="Kerja kerja kerja!">Kerja kerja kerja!</option>
                    <option value="Beres-beres">Beres-beres</option>
                </select>
            </div>

            <button type="submit" class="bg-orange-400 hover:bg-orange-500 text-black font-semibold px-4 py-2 rounded">
                Tambah Room
            </button>
        </form>
    </div>
</div>

</body>
</html>
