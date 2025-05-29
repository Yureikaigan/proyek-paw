    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SamaSama - Landing Page</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-900 text-white min-h-screen">

    <!-- Optional wrapper untuk kontrol resolusi 1080x1920 -->
    <div class="w-[1080px] h-[1920px] mx-auto bg-gray-700 flex flex-col">

        <!-- Navbar -->
        <nav class="flex items-center justify-between px-4 py-3 border-b border-gray-700 bg-gray-900">
            <!-- Logo Tengah (pakai flex-1 dan text-center agar selalu di tengah) -->
            <div class="flex-1 text-center">
                <img src="{{ asset('images/logosamasama.png') }}" alt="SamaSama Logo" class="h-10 inline-block">
            </div>

            <!-- Profile kanan -->
            <div class="w-10 h-10">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('images/profile.png') }}" alt="Profile" class="rounded-full">
                </a>
            </div>
        </nav>

        <!-- Section Wrapper -->
        <div class="p-4 space-y-6 pb-24 overflow-y-auto">
            @forelse ($rooms as $category => $roomList)
                <div>
                    <h2 class="text-lg font-semibold mb-2">{{ $category }}</h2>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($roomList as $room)
                            <div class="bg-gray-800 rounded-xl overflow-hidden shadow">
                                <img src="{{ asset('images/banner.png') }}" alt="Banner" class="w-full h-24 object-cover">
                                <div class="p-2">
                                    <div class="text-sm font-semibold">
                                        <a href="{{ $room->googleMeet->link }}" target="_blank" class="hover:underline text-blue-400">
                                            {{ $room->name }}
                                        </a>
                                    </div>

                                    <div class="text-xs text-gray-400">
                                        {{ \Carbon\Carbon::parse($room->date)->format('F jS') }}
                                    </div>
                                    <div class="mt-2 flex items-center justify-end">
                                        <img src="{{ asset('images/profile.png') }}" alt="User" class="w-6 h-6 rounded-full">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-400">Tidak ada room ditemukan.</p>
            @endforelse
        </div>
    </div>

        <!-- Floating Button -->
    <a href="{{ route('rooms.create') }}"
       class="fixed bottom-6 right-6 bg-yellow-500 text-black text-2xl w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:bg-yellow-600 transition">
        +
    </a>


    </div>
    </body>
    </html>
