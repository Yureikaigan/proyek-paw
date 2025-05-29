<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen">

<!-- Back Button -->
<a href="{{ route('welcome') }}" class="absolute top-6 left-6">
    <img src="{{ asset('images/arrow-back.svg') }}" alt="Back" class="h-8 w-8">
</a>

<!-- Profile Container -->
<div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-gray-800 rounded-2xl shadow-lg p-8 w-full max-w-md border border-yellow-400">
        <h1 class="text-3xl font-bold text-center text-yellow-400 mb-6">Profil</h1>

        <div class="space-y-4">
            <div>
                <span class="block text-sm text-gray-400">Nama</span>
                <span class="text-lg font-semibold">{{ $user->name }}</span>
            </div>
            <div>
                <span class="block text-sm text-gray-400">Email</span>
                <span class="text-lg font-semibold">{{ $user->email }}</span>
            </div>
            <div>
                <span class="block text-sm text-gray-400">Terdaftar Sejak</span>
                <span class="text-lg font-semibold">{{ $user->created_at->format('F d, Y') }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Logout Button -->
<form method="POST" action="{{ route('logout') }}" class="text-center mt-8">
    @csrf
    <button type="submit"
            class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded-full transition">
        Logout
    </button>
</form>


</body>
</html>
