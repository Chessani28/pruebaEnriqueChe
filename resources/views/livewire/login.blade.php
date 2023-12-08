<div class=" flex items-center justify-center bg-gradient-to-r">
    <div class="max-w-md w-full bg-white p-8 shadow-md rounded-md">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Iniciar Sesión</h2>

        <form wire:submit.prevent="authenticate">
            <div class="mb-4">
                <label for="email" class="block text-gray-800 text-sm font-bold mb-2">Email:</label>
                <input wire:model="email" type="email" name="email" class="w-full border-b-2 border-gray-300 p-2 focus:outline-none focus:border-indigo-500 transition-all duration-300" required>
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-800 text-sm font-bold mb-2">Contraseña:</label>
                <input wire:model="password" type="password" name="password" class="w-full border-b-2 border-gray-300 p-2 focus:outline-none focus:border-indigo-500 transition-all duration-300" required>
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4 text-center">
            <p class="text-gray-600">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-indigo-500 hover:underline">Regístrate</a></p>
        </div>
            <button type="submit" class="w-full bg-indigo-500 text-white p-2 rounded-md hover:bg-indigo-600 transition-all duration-300">Iniciar sesión</button>
        </form>
    </div>
</div>
