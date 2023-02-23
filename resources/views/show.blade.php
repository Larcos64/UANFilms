<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="border-b border-gray-700 movie-info">
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="w-64 md:w-96" style="width: 24rem">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">V for Vendeta(2012)</h2>
                <div class="flex flex-wrap items-center mt-1 text-sm text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>

                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2022</span>
                    <span class="mx-2">|</span>
                    <span class="">Action, Thriller, Drama</span>
                </div>

                <p class="mt-8 text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At ducimus mollitia cum soluta! Impedit id sapiente laboriosam autem sit excepturi ab consectetur facilis libero porro nam similique, perspiciatis odio quibusdam?</p>

                <div class="mt-12">
                    <h4 class="font-semibold text-white">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screnplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screnplay</div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12">
                    <button class="flex items-center px-3 py-3 font-semibold text-gray-900 transition duration-150 ease-in-out bg-orange-500 rounded hover:bg-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-current">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                        </svg>
                        <span class="ml-2">Ver Trailer</span>
                        
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="border-b border-gray-800 movie-cast">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold"> Casting</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                    </a>
                
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>Diego Jimenez</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                    </a>
                
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>Diego Jimenez</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                    </a>
                
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>Diego Jimenez</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                    </a>
                
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>Diego Jimenez</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="transition duration-150 ease-in-out hover:opacity-70">
                    </a>
                
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-sm text-gray-300">
                            <span>Diego Jimenez</span>
                        </div>
                    </div>
                </div>

               


                
            </div>
            
        </div>
    </div>
    
</x-app-layout>