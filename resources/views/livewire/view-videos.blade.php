<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold mb-4">Videos Disponibles</h1>


    <div class="mb-4">
        <input wire:model="search" type="text" class="px-4 py-2 border rounded-md" placeholder="Buscar por título">
        <button wire:click="searchVideos" class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2">Buscar</button>
        <span class="text-gray-500 ml-2">Búsquedas realizadas por video: {{ $searchCount }}</span>
    </div>

    @if(count($videos) > 0)
    <table class="min-w-full bg-white border border-gray-300 rounded-md overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">Título</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Video</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
            <tr>
                <td class="py-2 px-4 border-b">{{ $video->title }}</td>
                <td class="py-2 px-4 border-b">{{ $video->description }}</td>
                <td class="py-2 px-4 border-b">
                    <iframe width="560" height="315" src="{{ $video->video_url }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe>

                    <button wire:click="incrementRepCounter({{ $video->id }})" class="px-4 py-2 bg-green-500 text-white rounded-md mt-2">Marcar como video visto</button><b>Reproducciones: </b>{{ $video->count_rep }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p class="text-gray-500">No hay videos disponibles.</p>
    @endif
</div>
