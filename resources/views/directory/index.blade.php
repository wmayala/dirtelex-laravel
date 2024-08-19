<x-guest-layout>
    @section('title','Directorio')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DIRECTORIO") }}
                    {{-- El menú de directorio sólo podría mostrar un index de cada modelo, con buscador y opción ver(show) --}}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
