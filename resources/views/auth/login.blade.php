<x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />

{{--  <form method="POST" action="{{ route('login') }}" novalidate >
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"  />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1 "
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm font-bold text-violet-700">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-red-500 underline rounded-md hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Ingresar') }}
            </x-primary-button>
        </div>
    </form> --}}



    
        <!-- Animated Wave Background  -->
        {{-- <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
        </div> --}}
        <!-- Log In Form Section -->

        
            <div class="container1 justify-content: center;
            align-items: center" id="container">
                <div class="form-container1 sign-up-container">
                    <form action="#">
                        @csrf
                        <h1>Registro</h1>
                        <div class="social-container1">
                            <a href="https://Github.com/YasinDehfuli" target="_blank" class="social"><i class="fab fa-github"></i></a>
                            <a href="https://Codepen.io/YasinDehfuli" target="_blank" class="social"><i class="fab fa-codepen"></i></a>
                            <a href="mailto:Ydehfuli@gmail.com" target="_blank" class="social"><i class="fab fa-google"></i></a>
                        </div>
                        <span>O usa tu Email para registrate</span>
                        <label>
                        {{--     <input type="text" placeholder="Name"/> --}}
                            
                            <x-text-input id="email" placeholder="Nombre" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </label>
                        <label>
                            <input type="email" placeholder="Email"/>
                        </label>
                        <label>
                            <input type="password" placeholder="Password"/>
                        </label>
                        <label>
                            <input type="password" placeholder="Password"/>
                        </label>
                        <button style="margin-top: 9px">Registrame</button>
                    </form>
                </div>
                <div class="form-container1 sign-in-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Ingresa</h1>
                        <div class="social-container1">
                            <a href="https://Github.com/YasinDehfuli" target="_blank" class="social"><i class="fab fa-github"></i></a>
                            <a href="https://Codepen.io/YasinDehfuli" target="_blank" class="social"><i class="fab fa-codepen"></i></a>
                            <a href="mailto:Ydehfuli@gmail.com" target="_blank" class="social"><i class="fab fa-google"></i></a>
                        </div>
                        <span> O ingresa usando tu dirección de correo</span>
                        <label>
                            {{-- <input type="email" placeholder="Email"/> --}}
                        
            <x-text-input id="email" placeholder="Correo" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </label>
                        <label>
                            {{-- <input type="password" placeholder="Password"/> --}}
                            

            <x-text-input id="password" class="block w-full mt-1 "
                            type="password"
                            placeholder="Contraseña"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </label>
                        <a href="#">Olvidaste tu contraseña?</a>
                        <button>Ingresar</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="bg-gray-900 overlay">
                        <div class="overlay-panel overlay-left">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 mb-5 mt-5 text-orange-500 fill-current" />
                            </a>
                            <h1 class="text-3xl font-bold mt-10">Ingresar</h1>
                            <p>Acceda aquí si ya tiene una cuenta </p>
                            <button class="mt-5 ghost border-orange-500 " id="signIn">Iniciar sesión</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 text-orange-500 fill-current" />
                            </a>
                            <h1 class="text-3xl font-bold mt-10">Crear cuenta!</h1>
                            <p>Regístrate si aún no tienes cuenta ... </p>
                            <button class="mt-5 ghost border-orange-500" id="signUp">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        
     
        
        

            
</x-guest-layout>
<script >

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));



</script>