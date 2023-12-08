<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4 text-center">Subir Video</h2>

    <form wire:submit.prevent="uploadVideo" class="space-y-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-600">Título:</label>
            <input wire:model="title" type="text" name="title" class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-600">Descripción:</label>
            <textarea wire:model="description" name="description" class="w-full mt-1 p-2 border border-gray-300 rounded-md"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="video_url" class="block text-sm font-medium text-gray-600">Enlace de YouTube (Elaces embebidos):</label>
            <input wire:model="video_url" type="url" name="video_url" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            @error('video_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition-all duration-300">Subir Video</button>
    </form>

</div>
