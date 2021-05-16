<x-guest-layout>

      <!-- Web page container -->
      <div class="h-screen bg-gray-100 flex flex-col space-y-4 justify-center items-center">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-6/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 
        bg-white rounded-lg shadow-md lg:shadow-lg">

    <div>
      <img class="mx-auto h-12 w-auto" src="vendor/adminlte/dist/img/Logofull.svg" alt="Workflow">
      <h2 class="mt-8 text-center text-3xl font-extrabold text-gray-900">
        ¿Has olvidado tu contraseña?
      </h2>
      <p class="text-center">Ingresa tu dirección de correo para recibir un enlace de restablecimiento. </p>
    </div>
<x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <form class="mt-8 space-y-6" action="{{ route('password.email') }}" method="POST">
    @csrf
      <div class="rounded-md shadow-sm -space-y-px">
    
        <div>
          <label for="email" class="sr-only">Correo Electronico</label>
          <input id="email" name="email" type="email" :value="old('email')" required autofocus required class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo electrónico">
        </div>
      </div>

      <div>
        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Enviar enlace de restablecimiento</span>
        </button>
      </div>


        <div class="grid grid-cols-1">
          <div class="text-center sm:text-mid whitespace-nowrap">
            <a href="{{ route('login') }}"  id="back-button-password-reset" class="back_button transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-blue-500 hover:bg-blue-200 focus:outline-none focus:bg-blue-300 focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <p class="ml-2 text-blue transition duration-500 ease-in-out inline-flex font-bold text-blue-500 hover:text-blue-700">
                                Regresar
                                </p>
            </a>
          </div>
        </div>
        
    </form>

  </div>
  <hr>
   <div class="flex justify-center text-gray-500 text-sm mt-8">
        <p>&copy;2021. All right reserved.</p>
      </div>
</div>
</div>
</div>
</div>

</x-guest-layout>
