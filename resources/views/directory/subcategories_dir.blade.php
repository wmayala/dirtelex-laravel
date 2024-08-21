<x-guest-layout>
    @section('title','Subcategorías')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("SUBCATEGORIAS") }}
                    </div>
                </div>

                @include('layouts.search')

                <div class="container p-3">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>CATEGORÍA</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($subcategories)
                                        @foreach($subcategories as $subcategory)
                                        <tr>
                                            <td class="col-3">
                                                <!-- Botón para abrir el modal -->
                                                <button
                                                    x-data
                                                    x-on:click="$dispatch('open-modal', '{{ $modalName = 'showInfo' }}')"
                                                    class="py-2 bg-blue-600 rounded"
                                                >
                                                    {{$subcategory->subcategory}}
                                                </button>

                                                <!-- Implementación del modal -->
                                                <x-modal :name="$modalName" maxWidth="2xl">
                                                    <div class="p-4" style="background-color: #eeeff1;">
                                                        <h2 class="fs-3 font-bold mb-4">DETALLES</h2>
                                                            <hr class="mb-4">
                                                            <div class="row">
                                                                <div class="flex justify-center align-center">
                                                                    <table class="w-75">
                                                                        <tr>
                                                                            <td><label for="subcategory" class="uppercase">Nombre:</label></td>
                                                                            <td>
                                                                                <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                    type="text"
                                                                                    id="subcategory"
                                                                                    name="subcategory"
                                                                                    value="{{$subcategory->subcategory}}"
                                                                                    disabled>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><label for="description" class="uppercase">Descripción:</label></td>
                                                                            <td>
                                                                                <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                    type="text"
                                                                                    id="description"
                                                                                    name="description"
                                                                                    value="{{$subcategory->description?$subcategory->description:'No definida'}}"
                                                                                    disabled>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><label for="category_id" class="uppercase">Categoría:</label></td>
                                                                            <td>
                                                                                <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                    type="text"
                                                                                    id="category_id"
                                                                                    name="category_id"
                                                                                    value="{{$subcategory->category->category}}"
                                                                                    disabled>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><label for="status" class="uppercase">Estado:</label></td>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="col-6 d-flex align-items-center gap-2">
                                                                                        <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                                                            type="text"
                                                                                            id="status"
                                                                                            name="status"
                                                                                            value="{{$subcategory->status===1?'ACTIVO':'INACTIVO'}}"
                                                                                            disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <hr class="mt-4">
                                                            <div class="text-end">
                                                                <button
                                                                    x-on:click="$dispatch('close-modal', '{{ $modalName }}')"
                                                                    class="mt-4 px-4 py-2 btn btn-secondary text-white rounded"
                                                                >
                                                                    Cerrar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </x-modal>





                                            </td>
                                            <td class="col-4">{{$subcategory->category->category}}</td>
                                            <td class="col-3">{{$subcategory->description?$subcategory->description:'No definida'}}</td>
                                            <td class="text-center">
                                                @if($subcategory->status==1)
                                                    <span class="badge bg-success w-100">ACTIVO</span>
                                                @else
                                                    <span class="badge bg-danger w-100">INACTIVO</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="4">No existen subcategorías</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
