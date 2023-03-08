
<div class="relative mt-3 mr-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="w-64 px-4 py-1 pl-8 bg-gray-700 rounded-full focus:outline-none focus:shadow-outline" placeholder="Buscar">
    <div class="absolute top-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 mt-2 ml-3 text-gray-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </div>


       {{--  <div wire:loading class="top-0 right-0 mt-4 mr-6 spinner"></div> --}}
        @if (strlen($search >= 2))
            <div class="absolute w-64 mt-4 text-sm bg-gray-800 rounded">
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $resultado)
                            <li class="border-b border-gray-700">
                                <a href="{{route('movies.show',$resultado['id'])}}" class="flex items-center px-3 py-3 hover:bg-gray-700">
                                    @if ($resultado['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{$resultado['poster_path']}}" alt="" class="w-8">
                                    @else
                                        <img src="https://via.placeholder.com/50x75" alt="" class="w-8">
                                    @endif
                                    
                                    <span class="ml-4">{{$resultado['title']}}</span>
                                    
                                </a>
                            </li>
                        @endforeach
                        
                    </ul>
                @else
                    <div class="px-3 py-3">No se encontraron resultados para "{{$search}}"</div>
                @endif
                
            </div>
        @endif
</div>
