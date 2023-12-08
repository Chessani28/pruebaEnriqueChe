<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/input.css')
    <title>Videos con estadisticas</title>
    @livewireStyles
</head>

<body class="font-sans flex min-h-screen bg-gray-100">
    <div class="flex flex-col flex-1">
        <header class="bg-gray-700 text-white p-4 relative z-10">
            <div class="container mx-auto flex justify-between items-center">
                <button class="lg:hidden focus:outline-none" id="open-menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <h1 class="text-2xl font-semibold container mx-auto text-center">Sistema de subida de videos</h1>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm">Logout</button>
                </form>
            </div>
        </header>

        <div class="container mx-auto mt-4 flex-grow">
            {{ $slot }}
        </div>

        <footer class="bg-gray-700 text-white p-4 mt-4">
            <div class="container mx-auto text-center">
                <p class="text-sm">© {{ date('Y') }} Prueba para: Enrique Esparza Chessani.</p>
            </div>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
