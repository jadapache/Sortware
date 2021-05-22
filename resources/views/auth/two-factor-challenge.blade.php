<x-guest-layout>

<div class="flex flex-col h-screen bg-gray-100">
    <!-- Auth Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">
    <div>
      <img class="mx-auto h-12 w-auto" src="vendor/adminlte/dist/img/LogoFull.svg" alt="Sortware">
      <h2 class="mt-8 text-center text-3xl font-extrabold text-gray-900">
        Restablecimiento de contraseña
      </h2>
      <p class="text-center"> Por favor ingresa de nuevo tu dirección de correo electrónico y la contraseña que deseas asignar a tu cuenta </p>
    </div>
<x-jet-validation-errors class="mb-4" />
    <form class="mt-8 space-y-6" action="{{ route('password.update') }}" method="POST">
    @csrf
    input type="hidden" name="token" value="{{ $request->route('token') }}">

      <div class="rounded-md shadow-sm -space-y-px">
    
        <div>
          <label for="email" class="sr-only">Correo Electronico</label>
          <input id="email" name="email" type="email" :value="old('email')" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"  placeholder="Correo electrónico">
        </div>
        <div>
          <label for="password" class="sr-only">Contraseña</label>
          <input id="password" name="password" type="password" require autocomplete="new-password" required class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nueva contraseña">
        </div>

        <div>
          <label for="password_confirmation" class="sr-only">Contraseña Confirmación</label>
          <input id="password_confirmation" name="password_confirmation" type="password" require autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmar nueva contraseña">
        </div>
      </div>

      <div>
        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Restablecer contraseña</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
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
</div>

</x-guest-layout>