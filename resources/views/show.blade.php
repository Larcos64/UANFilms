<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!--Conexion con BD y reseñas-->
    <?php 
    // Para ver errores de Migracion
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

    include_once '../lib/Conexion.php';
    Conexion::conectar();

    function getPeliculas()
    {
        // seleccionar de TABLA
        $sql = "SELECT * FROM users ";
        $result = Conexion::obtener( $sql );
        var_dump( $result );
        echo '<br>Este es mi comentario:';
        echo $result[0]['name'];
        return $result;
    }

    function guardarComentario( $comentario )
    {

        $sql = "INSERT INTO users (cod) VALUES( '1' ) ";
        //$result = Conexion::ejecutar( $sql ); // ejecutar funciona para INSERT, UPDATE
        var_dump( $comentario );
        return $comentario;
    }

    function get_array($array, $index = 'assoc') {
        $output = NULL;
        if ($index === 'assoc') {
            foreach ($array as $key => $item) {
                if (!is_int($key)) {
                    $output[$key] = $item;
                }
            }
            return $output;
        } elseif ($index === 'index') {
            foreach ($array as $key => $item) {
                if (is_int($key)) {
                    $output[$key] = $item;
                }
            }
            return $output;
        } else {
            return $array;
        }
    }
    

    function show( $obj )
    {
        echo '<pre style="color:¨red;">';
        echo $obj;
        echo '</pre>';
    }

    $misPeliculas = getPeliculas();
    show($misPeliculas);
   echo '<pre>';
        echo $misPeliculas;
        echo '</pre>';

        print_r( $misPeliculas, true );
        
        show($_REQUEST);
    var_dump($_REQUEST);
    if( $_REQUEST['accion'] == "accionGuardar")
    {
        guardarComentario($_REQUEST['mensajeJcorge'] );
    }
    ?>
        
    <div class="border-b border-gray-700 movie-info">
<!-- Fin Conexion Guardar y imprimir -->
        
<!--Datos Pelicula-->
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$detallesPelicula['poster_path']}}" alt="" class="w-64 lg:w-96" style="width: 24rem" id="bright">
            </div>          
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$detallesPelicula['title']}}(2012)</h2>
                <div class="flex flex-wrap items-center mt-1 text-sm text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>

                    <span class="ml-1">{{$detallesPelicula['vote_average'] * 10 . '%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($detallesPelicula['release_date'])->locale('es')->format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span class="">
                        @foreach ($detallesPelicula['genres'] as $genero)
                            {{$genero['name']}}@if (!$loop->last),@endif
                        @endforeach
                    </span>
                </div>

                <p class="mt-8 text-gray-300">{{$detallesPelicula['overview']}}</p>

                <div class="mt-12"> 
                    <h4 class="font-semibold text-white">Reparto</h4>
                    <div class="flex mt-4">
                        @foreach ( $detallesPelicula['credits']['crew'] as $crew )
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                
                @if (count($detallesPelicula['videos']['results']) > 0)
                    <div class="mt-12">
            
                        <a 
                            Target="_blank"
                            href="https://youtube.com/watch?v={{ $detallesPelicula['videos']['results'][0]['key']}}"
                            class=" inline-flex items-center px-3 py-3 font-semibold text-gray-900 transition duration-150 ease-in-out bg-orange-500 rounded hover:bg-orange-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                            <span class="ml-2">Ver Trailer</span>
                        </a>
                        <!-- Espacio Reseñas -->
                        <h1>CUADRO RESEÑAS</h1>


                        <!-- Fin Reseñas -->
                    </div>
                @endif
                
            </div>
        </div>
    </div>
    
<!--Actores-->
    <div class="border-b border-gray-800 movie-cast">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">Actores</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                
                    @foreach ( $detallesPelicula['credits']['cast'] as $cast )
                    @if ($loop->index < 5)
                            <div class="mt-8">
                                <a href="#">
                                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}"alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            
                                <div class="mt-2">
                                    <a href="#" class="mt-2 text-lg hover:text-gray-300">{{$cast['name']}}</a>
                                    <div class="flex items-center text-sm text-gray-300">
                                        <span>{{$cast['character']}}</span>
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    @endforeach
<!--Actores end-->
                <div class="movie_card" id="bright">
                    <div class="info_section">
                      <div class="movie_header">
                        <img class="locandina" src="https://movieplayer.net-cdn.it/t/images/2017/12/20/bright_jpg_191x283_crop_q85.jpg"/>
                        <h1>Bright</h1>
                        <h4>2017, David Ayer</h4>
                        <span class="minutes">117 min</span>
                        <p class="type">Action, Crime, Fantasy</p>
                      </div>
                      <div class="movie_desc">
                        <p class="text">
                            
                          Set in a world where fantasy creatures live side by side with humans. A human cop is forced to work with an Orc to find a weapon everyone is prepared to kill
                           for. 
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
                    <div class="blur_back bright_back"></div>
                </div>
                
            </div>
            <form enctype="multipart/form-data">
            <!-- Espacio Reseñas Informacion -->
            <h2>Por favor Agradecemos que pueda mencionarnos que le parece esta pelicula a continuacion podra dejar su reseña de la misma, Gracias!</h2>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> </label>
            <textarea name="coments" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 
            focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Write your thoughts here...">
            </textarea>       
            <input type="hidden" value="accionGuardar" name="accion">
            <button type="submit">Guardar</button>
            </form>
<!-- Fin espacio reseñas -->
        </div>
        
    </div>
    

    <div class="border-b border-gray-800 movie-cast">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">Imagenes</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                
                    @foreach ( $detallesPelicula['images']['backdrops'] as $image )
                    @if ($loop->index < 5)
                            <div class="mt-8">
                                <a href="#">
                                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}"alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                                </a>
                            </div>
                        @endif
                    @endforeach


            </div>
            
        </div>
    </div>
    
</x-app-layout>