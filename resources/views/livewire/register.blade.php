<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded shadow-md">
    <form wire:submit.prevent="register">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input wire:model="name" type="text" name="name" class="w-full p-2 border rounded">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input wire:model="email" type="email" name="email" class="w-full p-2 border rounded">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
            <input wire:model="password" type="password" name="password" class="w-full p-2 border rounded">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="passwordConfirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña:</label>
            <input wire:model="passwordConfirmation" type="password" name="passwordConfirmation" class="w-full p-2 border rounded">
            @error('passwordConfirmation') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="role_id" class="block text-gray-700 text-sm font-bold mb-2">Rol:</label>
            <select wire:model="role_id" name="role_id" class="w-full p-2 border rounded">
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
            </select>
            @error('role_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Registrarse</button>
    </form>
</div>
