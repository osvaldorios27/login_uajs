<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-extrabold text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-xl p-6">
                <div class="flex items-center space-x-4">
                    <!-- Icon -->
                    <div class="flex-shrink-0">
                        <svg class="w-12 h-12 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c0-1.657-1.343-3-3-3S6 9.343 6 11s1.343 3 3 3 3-1.343 3-3zm0 0c0 1.657 1.343 3 3 3s3-1.343 3-3-1.343-3-3-3-3 1.343-3 3zm0 0v2m0-2v-2" />
                        </svg>
                    </div>

                    <!-- Welcome Message -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                            {{ __('¡Bienvenido de nuevo,') }} {{ Auth::user()->name }}!
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            {{ __("You're logged in!") }}
                        </p>
                    </div>
                </div>

                <!-- Example Content Section -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-indigo-100 dark:bg-indigo-600/20 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold text-indigo-700 dark:text-indigo-300">📈 Analítica</h4>
                        <p class="mt-2 text-sm text-indigo-800 dark:text-indigo-200">Realice un seguimiento de la actividad y el rendimiento de los usuarios.</p>
                    </div>

                    <div class="bg-green-100 dark:bg-green-600/20 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold text-green-700 dark:text-green-300">🗓️ Citas</h4>
                        <p class="mt-2 text-sm text-green-800 dark:text-green-200">Vea y administre las próximas reservas.</p>
                    </div>

                    <div class="bg-yellow-100 dark:bg-yellow-600/20 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold text-yellow-700 dark:text-yellow-300">⚙️ Configuración</h4>
                        <p class="mt-2 text-sm text-yellow-800 dark:text-yellow-200">Personaliza tu perfil y preferencias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
