<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - {{ $user->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

<div class="w-[1080px] h-[1920px] mx-auto bg-gray-700 flex flex-col overflow-hidden">

    <nav class="bg-gray-900 px-6 py-4 flex items-center relative shadow-md">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/arrowback.png') }}" alt="Back" class="h-8 w-8">
        </a>
        <h1 class="text-lg font-semibold text-yellow-400 mx-auto">Profil</h1>
    </nav>

    <div class="flex-grow flex items-center justify-center px-4">
        <div class="bg-gray-800 rounded-2xl shadow-lg p-8 w-full max-w-md border border-yellow-400">
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

    <form method="POST" action="{{ route('logout') }}" class="text-center mb-12">
        @csrf
        <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-8 rounded-full transition">
            Logout
        </button>
    </form>
</div>

</body>
</html>
