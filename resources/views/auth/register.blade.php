<x-guest-layout>
    <!-- Web page container -->
    <div class="h-screen bg-gray-100 flex flex-col space-y-2 justify-center items-center">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-4/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 
        bg-white rounded-lg shadow-md lg:shadow-lg">
    <div>
      <img class="mx-auto h-12 w-auto" src="vendor/adminlte/dist/img/Logofull.svg" alt="Workflow">
      <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900">
        Creación de cuenta
      </h2>
      <p class="text-center"> Prueba la herramienta por tiempo limitado </p>
    </div>
<x-jet-validation-errors class="mb-2" />
    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <form class="mt-1 space-y-3" action="{{ route('register') }}" method="POST">
    @csrf
      <div class="rounded-md shadow-sm -space-y-px">
      <div>
          <label for="name" class="sr-only">Nombre completo</label>
          <input id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre completo">
        </div>
    
        <div>
          <label for="email" class="sr-only">Correo Electronico</label>
          <input id="email" name="email" type="email" :value="old('email')" required class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo electrónico">
        </div>
        <div>
          <label for="password" class="sr-only">Contraseña</label>
          <input id="password" name="password" type="password" require autocomplete="current-password" required class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contraseña">
        </div>

        <div>
          <label for="password_confirmation" class="sr-only">Contraseña Confirmación</label>
          <input id="password_confirmation" name="password_confirmation" type="password" require autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder=" Confirmar Contraseña">
        </div>
      </div>


        <div class="flex justify-center">
        {!! htmlScriptTagJsApi() !!}
         {!! htmlFormSnippet() !!}
        </div>


      <div>
        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Registrarse</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
      </div>

                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <label class="mr-2" >¿Ya tienes una cuenta?</label>
                            <a href="{{ route('login') }}" class="text-blue transition duration-500 ease-in-out inline-flex font-bold text-blue-500 hover:text-blue-700">
                                Iniciar sesión
                            </a>
                        </div>
                    </div>
    </form>

  </div>
  <hr>
   <div class="flex justify-center text-gray-500 text-sm mt-8">
    <p>&copy;<b>Sortware</b>- 2021</p>
      </div>
</div>
</div>
</div>
</div>
</x-guest-layout>
