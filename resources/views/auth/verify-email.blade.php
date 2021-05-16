<x-guest-layout>

<div class="flex flex-col h-screen bg-gray-100">
    <!-- Auth Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">
    <div>
      <img class="mx-auto h-12 w-auto" src="vendor/adminlte/dist/img/Logofull.svg" alt="Workflow">
      <h2 class="mt-8 text-center text-3xl font-extrabold text-gray-900">
        Verificación de correo electrónico
      </h2>
      <p class="text-center"> Gracias por registrarte. Antes de empezar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que acabamos de enviarte? Si no has recibido el correo electrónico, da clic en el bóton inferior para enviarlo nuevamente.</p>
    </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                <p class="text-center"> Durante el proceso de registro un  vínculo de verificación ha sido enviado a tu correo electrónico </p>
            </div>
        @endif

    <form class="mt-8 space-y-6" action="{{ route('verification.send') }}" method="POST">
    @csrf

      <div class="rounded-md shadow-sm -space-y-px">
    
      </div>

      <div>
        <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Renviar correo de verificación</span>
        </button>
      </div>

    </form>

        <form method="POST" action="{{ route('logout') }}">
                @csrf

                   <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                    <span class="inline-block mr-2">Cerrar sesión</span>
                    </button>
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
