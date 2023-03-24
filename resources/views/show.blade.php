<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
    <div class="border-b border-gray-700 movie-info">

        

        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$detallesPelicula['poster_path']}}" alt="" class="w-64 lg:w-96" style="width: 24rem" id="bright">
            </div>          
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$detallesPelicula['title']}}</h2>
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
                        @if (count($detallesPelicula['videos']['results']) > 0)
                        <div class="ml-12 ">
                            <a 
                                Target="_blank"
                                href="https://youtube.com/watch?v={{ $detallesPelicula['videos']['results'][0]['key']}}"
                                class="inline-flex items-center px-3 py-2 font-semibold text-gray-900 transition duration-150 ease-in-out bg-orange-500 rounded hover:bg-orange-600" style="margin-top: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-current ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                </svg>
                                <span class="ml-2">Ver Trailer</span>
                            </a>
                        </div>
                    @endif
                    </div>
                </div>
                <form id="send_message"  method="POST">
                @csrf
                    <div class="flex" style="align-items: end;">
                    
                        
                        {{-- @if (count($detallesPelicula['videos']['results']) > 0)
                            <div class="mt-12">
                                <a 
                                    Target="_blank"
                                    href="https://youtube.com/watch?v={{ $detallesPelicula['videos']['results'][0]['key']}}"
                                    class="inline-flex items-center px-3 py-3 font-semibold text-gray-900 transition duration-150 ease-in-out bg-orange-500 rounded hover:bg-orange-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                    </svg>
                                    <span class="ml-2">Ver Trailer</span>
                                </a>
                            </div>
                        @endif --}}

                            <div class="mt-12">
                                {{-- <div class="max-w-2xl mx-auto mr-15"> --}}
                                    <h4 class="mb-4 font-semibold text-white">Reseña</h4>
                                    <label for="message" class="mt-8 mb-2 font-medium text-gray-300 ">Dejanos tu reseña acerca de esta pelicula:</label>
                                        <textarea id="message"  name="message" rows="4" class="mt-3 p-2.5 w-full text-sm text-gray-900 bg-gray-700 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu Reseña..."></textarea>
                                {{-- </div> --}}
                            </div>
                            <input id="user_id" name="user_id" value="{{Auth::user()->id }}" hidden>
                            <input name="pelicula_id" value="{{$detallesPelicula['id']}}" hidden>
                            <div class="mt-15">
                                <button  type="submit" class="items-center px-3 mb-2 ml-4 font-semibold text-gray-900 transition duration-150 ease-in-out bg-orange-500 rounded hover:bg-orange-600" style="padding-top: 5px;padding-bottom: 5px;">Enviar</button>
                            </div>
                    
                    </div>
                </form> 
                
                
            </div>
        </div>
    </div>

    <div class="border-b border-gray-800 movie-cast">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="mb-4 text-4xl font-semibold">Reseñas</h2>

<div class="h-auto sliderAx">


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
        {{--     <div class="duration-700 ease-in-out" data-carousel-item>
                {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> 
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$detallesPelicula['poster_path']}}" alt="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="width: 24rem" >

            </div> --}}

            {{-- <div class="duration-700 ease-in-out" data-carousel-item>
                {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> 
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$detallesPelicula['poster_path']}}" alt="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="width: 24rem" >

            </div> --}}
            {{-- <div class="duration-700 ease-in-out" data-carousel-item>
                {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> 
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$detallesPelicula['poster_path']}}" alt="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" style="width: 24rem" >

            </div> --}}

             @foreach ($reseñas as $reseña)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <p class="mb-1 text-3xl text-center text-gray-300" ><i class="fa fa-quote-left"></i> {{$reseña['resena']}}   <i class="fa fa-quote-right"></i></p>
                    <p class="mb-2 text-sm font-bold text-center text-gray-400 ">{{$reseña['user_id']}}</p>
                    <p class="text-2xl text-center text-gray-300 client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </p>
                </div>
            @endforeach 
        </div>
        <!-- Slider indicators -->
        {{-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button {{-- type="button"  class="w-4 pb-2 bg-orange-400 border-none rounded-full"{{--  aria-current="true"  aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>

            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button> --}}
    </div>
    

    
    {{-- <div id="slider-1" class="container mx-auto">
        
        <div class="object-fill h-auto px-10 py-12 text-white bg-center bg-cover" >
            @foreach ($reseñas as $reseña)
                <div class="">
                    <p class="mb-1 text-3xl text-center text-gray-300" ><i class="fa fa-quote-left"></i> {{$reseña['resena']}}   <i class="fa fa-quote-right"></i></p>
                    <p class="mb-2 text-sm font-bold text-center text-gray-400 ">{{$reseña['user_id']}}</p>
                    <p class="text-2xl text-center text-gray-300 client-review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </p>
                </div>  
            
       
    </div> <!-- container -->
      <br>
      </div>
      
    </div>
    <div  class="flex justify-between w-12 pb-2 mx-auto">
        <button id="sButton1" onclick="sliderButton1()" class="w-4 pb-2 bg-orange-400 border-none rounded-full" ></button>
        <button id="sButton2" onclick="sliderButton2() " class="w-4 p-2 bg-orange-400 border-none rounded-full "></button>
    </div>
    @endforeach
        </div>
    </div> --}}

    
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
                            
            </div>
            
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
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script src="{{ asset('../js/login.js') }}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/0e637fdd52.js" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script>
    
   /* const for = document.querySelector('#message'); */
   const formulario = document.querySelector('#send_message');
    
    $('#send_message').on('submit', function(e) {
                event.preventDefault();
                const ejemplo = document.getElementById('#message');
                const mensaje = document.querySelector('#message').value;
                var form = $(this);
                    var $thisForm = $('#send_message');
                    var formData = new FormData(this);
                    var url = "{{ route('message')}}";
                            let timerInterval;
                            Swal.fire({
                                title: '¿Quieres guardar tu reseña?',
                                html: `<strong>Tu Reseña es:</strong>
                                <br>
                                ${mensaje}`,
                                showDenyButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Guardar',
                                denyButtonText: `No Guardar`,
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: 'Reseña Envianda',
                                        position: 'top-end',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 2000
                                    }/* 'Reseña Envianda!', '', 'success','2000' */);
                                    $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    type: "POST",
                                    url: url,
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    dataType:'json',
                                }).done(function(respuesta) {
                                    console.log(respuesta);
                                    
                                    formulario.reset();
                                })
                                } else if (result.isDenied) {
                                    Swal.fire('La reseña no se guardara', '', 'info')
                                }
                            })      
            });



    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-orange-600");
            $("#sButton2").addClass("bg-orange-600");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-orange-600");
            $("#sButton1").addClass("bg-orange-600");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-orange-600");
    $("#sButton1").addClass("bg-orange-600");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-orange-600");
    $("#sButton2").addClass("bg-orange-600");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-orange-600");
        

        loopSlider();
     
        
    
    
    
    
    });

  
</script>