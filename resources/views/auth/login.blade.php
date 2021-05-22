<x-guest-layout>

      <!-- Web page container -->
<div class="h-screen bg-gray-100 flex flex-col space-y-10 justify-center items-center">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-4/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">

    <div>
      <img class="mx-auto h-12 w-auto" src="vendor/adminlte/dist/img/LogoFull.svg" alt="Sortware">
      <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900">
        Iniciar sesión
      </h2>
      <p class="text-center"> Gestionar tu inventario nunca fue tan fácil</p>
      <x-jet-validation-errors class="mb-2"/>
    </div>
  @if (session('status'))
            <div class="mb-1 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <form class="mt-1 space-y-7" action="{{ route('login') }}" method="POST">
    @csrf

      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email-address" class="sr-only">Correo Electronico</label>
          <input id="email-address" name="email" type="email" :value="old('email')" required autofocus required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo electrónico">
        </div>
        <div >
          <label for="password" class="sr-only">Contraseña</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contraseña">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
            Mantener sesión iniciada
          </label>
        </div>

       <div class="text-sm">
          <a href="{{ route('password.request') }}" class="text-blue transition duration-500 ease-in-out inline-flex font-bold text-blue-500 hover:text-blue-700">
            ¿Has olvidado tu contraseña?
          </a>
       </div>
    </div>

{{-- <div class="flex items-center">
          {!! htmlScriptTagJsApi() !!}
           {!! htmlFormSnippet() !!}
      </div> --}}



      <div>
        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Ingresar</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
      </div>


                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <label class="mr-2" >¿Aún no estás en Sortware?</label>
                            <a href="{{ route('register') }}" class="text-blue transition duration-500 ease-in-out inline-flex font-bold text-blue-500 hover:text-blue-700">
                                Crear cuenta
                            </a>
                        </div>
                    </div>
    </form>

  </div>
       <div class="flex justify-center text-gray-500 text-sm mt-8">
        <p>&copy;<b>Sortware</b> - 2021</p>
      </div>
</div>
</div>
</div>
</div>
</x-guest-layout>
