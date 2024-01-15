<x-app-layout>
    @section('title','Detalles de la institución')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("DETALLES")}}
                    </div>
                </div>
                <div class="row p-5">
                    <div class="flex justify-center align-center">
                        <table class="col-6">
                            <tr>
                                <td><label for="institution" class="uppercase">Nombre:</label></td>
                                <td>
                                    <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                        type="text"
                                        id="institution"
                                        name="institution"
                                        value="{{$institution->institution}}"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="acronym" class="uppercase">Siglas:</label></td>
                                <td>
                                    <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                        type="text"
                                        id="acronym"
                                        name="acronym"
                                        value="{{$institution->acronym}}"
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
                                        value="{{$institution->description?$institution->description:'No definida'}}"
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
                                        value="{{$institution->category->category}}"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="subcategory_id" class="uppercase">Categoría:</label></td>
                                <td>
                                    <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                        type="text"
                                        id="subcategory_id"
                                        name="subcategory_id"
                                        value="{{$institution->subcategory->subcategory}}"
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
                                                value="{{$institution->status===1?'ACTIVO':'INACTIVO'}}"
                                                disabled>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="{{route('institution.index')}}" class="btn btn-secondary mt-3 text-sm uppercase col-3">
                            <strong><< Regresar</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
