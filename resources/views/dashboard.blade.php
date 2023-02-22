<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div {{-- class="bg-white overflow-hidden shadow-sm sm:rounded-lg" --}} class="container mx-auto px-4 pt-16">
                
                <div class="popular-movies">
                    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Peliculas Populares</h2>
                    <div class="grid grid-cols-5 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/V_de_Vendetta-897807857-large.jpg" alt="" class="hover:opacity-70 transition ease-in-out duration-150">
                            </a>
                        
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">example</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>star</span>
                                    <span class="ml-1">85%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2022</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    action, thriller, comedy
                                </div>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>



            </div>
     {{--    </div>
    </div> --}}
</x-app-layout>
