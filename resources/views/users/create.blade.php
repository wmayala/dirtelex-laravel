<x-app-layout>
    @section('title','Agregar usuario')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("AGREGAR USUARIO") }}
                    </div>
                </div>

                <div class="row p-5 text-center">

                    @include('layouts.search')
                    <span style="color: #111e60; font-size: 10pt; font-style: italic;">*** Ingrese un correo válido: <strong>nombre.apellido@bcr.gob.sv</strong> ***</span>


                    <form action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="text-center">
                            @if($data)
                                <br><br>
                                <span class="fw-bold uppercase">Usuario encontrado:</span>
                                <br><br>
                                <table class="w-100 ">
                                    <tr>
                                        <td class="text-end">
                                            <label for="name" class="w-50 uppercase text-start">
                                                Nombre:
                                            </label>
                                        </td>
                                        <td class="text-start">
                                            <input class="bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-50"
                                                type="text"
                                                id="name"
                                                name="name"
                                                disabled
                                                value="{{$data?$data[0]:"No hay información disponible"}}"
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <label for="email" class="w-50 uppercase text-start">
                                                Correo electrónico:
                                            </label>
                                        </td>
                                        <td class="text-start">
                                            <input class="bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-50"
                                                type="text"
                                                id="email"
                                                name="email"
                                                disabled
                                                value="{{$data?$data[1]:"No hay información disponible"}}"
                                            >
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="text-end">
                                            <label for="unit" class="w-50 uppercase text-start">
                                                Unidad:
                                            </label>
                                        </td>
                                        <td class="text-start">
                                            <input class="bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-50"
                                                type="text"
                                                id="unit"
                                                name="unit"
                                                disabled
                                                value="{{$data?$data[2]:"No hay información disponible"}}"
                                            >
                                        </td>
                                    </tr> --}}
                                </table>
                            @else
                                <br><br>
                                <span class="mx-3 p-3 rounded-lg text-danger fw-bold">No hay información para mostrar</span>
                            @endif
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn mt-3 text-sm uppercase w-25" style="background-color: #111e60; color: #f2f2f2">
                                <strong>Guardar</strong>
                            </button>

                            <a href="{{route('user.index')}}" class="btn btn-secondary mt-3 text-sm uppercase w-25">
                                <strong>Cancelar</strong>
                            </a>
                        </div>



                    </form>

                </div>







             </div>
         </div>
     </div>
 </x-app-layout>
