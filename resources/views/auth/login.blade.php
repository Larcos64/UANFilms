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
        </div> 
         --}}

        
            <div class="container1 justify-content: center;
            align-items: center" id="container">
                <div class="form-container1 sign-up-container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1>Registro</h1>
                        <div class=" social-container1">
                            <a href="#" target="_blank" class="social"><i class="fab fa-github"></i></a>
                            <a href="#" target="_blank" class="social"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank" class="social"><i class="fab fa-google"></i></a>
                        </div>
                        <span>O usa tu Email para registrate</span>
                        <label>
                            <x-text-input id="name" placeholder="Nombre"  class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>
                        <label>
                            <x-text-input id="email" placeholder="Email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </label>
                        <label>
                            <x-text-input id="password" placeholder="Contraseña" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </label>
                        <label>
                            <x-text-input id="password_confirmation" placeholder="Confirmar Contraseña"  class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </label>
                        <button style="margin-top: 9px">Registrame</button>
                    </form>
                </div>
                <div class="form-container1 sign-in-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Ingresa</h1>
                        <div class="social-container1">
                            <a href="#" target="_blank" class="social"><i class="fab fa-github"></i></a>
                            <a href="#" target="_blank" class="social"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank" class="social"><i class="fab fa-google"></i></a>
                        </div>
                        <span> O ingresa usando tu dirección de correo</span>
                        <label>
                            {{-- <input type="email" placeholder="Email"/> --}}
                        
            <x-text-input id="email" placeholder="Correo" class="block w-full mt-1 " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
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
                                <x-application-logo class="w-20 h-20 mt-5 mb-5 text-orange-500 fill-current" />
                            </a>
                            <h1 class="mt-10 text-3xl font-bold">Ingresar</h1>
                            <p style="margin: 20px 0 30px">Acceda aquí si ya tiene una cuenta </p>
                            <button class="mt-5 border-orange-500 ghost " id="signIn">Iniciar sesión</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 text-orange-500 fill-current" />
                            </a>
                            <h1 class="mt-10 text-3xl font-bold">Crear cuenta!</h1>
                            <p style="margin: 20px 0 30px">Regístrate si aún no tienes cuenta ... </p>
                            <button class="mt-5 border-orange-500 ghost" id="signUp">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        
     
        
        

            
</x-guest-layout>
<script src="https://kit.fontawesome.com/0e637fdd52.js" crossorigin="anonymous"></script>
<script >

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));



</script>