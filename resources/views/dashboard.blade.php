<x-app-layout>
    <!-- Dasboard -->
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex items-center justify-center mt-5 ml-6">
        <livewire:search-dropdown>
    </div>
    
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8"> --}} 
            <div {{-- class="overflow-hidden bg-white shadow-sm sm:rounded-lg" --}} class="container px-4 pt-16 mx-auto">
                
                <div class="popular-movies">
                    <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Peliculas Populares</h2>
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

                    @foreach ($peliculasPopulares as $peliculapopular)
                        <div class="mt-8">
                            <a href="{{route('movies.show',$peliculapopular['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$peliculapopular['poster_path']}}" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                            </a>
                        
                            <div class="mt-2">
                                <a href="{{route('movies.show',$peliculapopular['id'])}}" class="mt-2 text-lg hover:text-gray-300">{{$peliculapopular['title']}}</a>
                                <div class="flex items-center mt-1 text-sm text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>

                                    <span class="ml-1">{{$peliculapopular['vote_average'] * 10 . '%'}}</span>
                                    <span class="mx-2">|</span>
                                    <span>{{\Carbon\Carbon::parse($peliculapopular['release_date'])->locale('es')->format('M d, Y')}}</span>
                                </div>
                                <div class="text-sm text-gray-400">
                                    @foreach ($peliculapopular['genre_ids'] as $genero)
                                        {{$generos->get($genero)}}@if (!$loop->last),@endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>

                <div class="py-24 now-playing-movies">
                    <div class="popular-movies">
                        <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase"> <nav>Now Playing</nav></h2>
                        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>
    
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">example</a>
                                    <div class="flex items-center mt-1 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
    
                                        <span class="ml-1">85%</span>
                                        <span class="mx-2">|</span>
                                        <span>Feb 20, 2022</span>
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        action, thriller, comedy
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>

                    
                </div>


                
                  
                  {{-- <div class="movie_card" id="tomb">
                    <div class="info_section">
                      <div class="movie_header">
                        <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53750.jpg"/>
                        <h1>Tomb Raider</h1>
                        <h4>2018, Roar Uthaug</h4>
                        <span class="minutes">125 min</span>
                        <p class="type">Action, Fantasy</p>
                      </div>
                      <div class="movie_desc">
                        <p class="text">
                          Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.
                        </p>
                      </div>
                      <div class="movie_social">
                        <ul>
                          <li><i class="material-icons">share</i></li>
                          <li><i class="material-icons"></i></li>
                          <li><i class="material-icons">chat_bubble</i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blur_back tomb_back"></div>
                  </div>
                  
                  <div class="movie_card" id="ave">
                    <div class="info_section">
                      <div class="movie_header">
                        <img class="locandina" src="https://mr.comingsoon.it/imgdb/locandine/235x336/53715.jpg"/>
                        <h1>Black Panther</h1>
                        <h4>2018, Ryan Coogler</h4>
                        <span class="minutes">134 min</span>
                        <p class="type">Action, Adventure, Sci-Fi</p>
                      </div>
                      <div class="movie_desc">
                        <p class="text">
                          T'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T'Challa's father's mistake. 
                        </p>
                      </div>
                      <div class="movie_social">
                        <ul>
                          <li><i class="material-icons">share</i></li>
                          <li><i class="material-icons"></i></li>
                          <li><i class="material-icons">chat_bubble</i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blur_back ave_back"></div>
                  </div>
 --}}
                
            </div>
    
</x-app-layout>
