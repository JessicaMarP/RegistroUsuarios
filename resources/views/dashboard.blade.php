<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <div class="flex items-center justify-between bg-white dark:bg-gray-800 rounded-2xl p-6 shadow border border-gray-200 dark:border-gray-700">
                <div>
                    <h1 class="text-5x1 font-semibold text-white">
                        Bienvenido
                    </h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        Sesión iniciada correctamente
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-2 bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-200 dark:border-gray-700 p-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center text-2xl">
                            🔐
                        </div>
                        <h2 class="text-xl font-semibold text-white">
                            Proyecto base con autenticación
                        </h2>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Este sistema funciona como una base en Laravel que incluye
                        acceso mediante Google, si estas viendo esto es porque en realidad
                        funciono.
                    </p>
                </div>

                <div class="bg-gray-800 rounded-2xl shadow border border-gray-200 dark:border-gray-700 p-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-2">
                            🟣 Estado actual
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            No hay funcionalidades activas por el momento.
                        </p>
                    </div>

                    <div class="mt-6 text-sm text-white font-medium">
                        Al menos ya sabemos utilizar Google Auth 😉 
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                Gracias por enseñarnos esto profe 💙
            </div>

        </div>
    </div>
</x-app-layout>
