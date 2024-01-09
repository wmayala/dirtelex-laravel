<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("DETALLES") }}
                    </div>
                </div>

                <div class="row p-5">
                    <div class="flex justify-center align-center">
                        <table class="col-6">
                            <tr>
                                <td><label for="category" class="uppercase">Nombre:</label></td>
                                <td>
                                    <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                        type="text"
                                        id="category"
                                        name="category"
                                        value="{{$category->category}}"
                                        disabled
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td><label for="description" class="uppercase">Descripción:</label></td>
                                <td>
                                    <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                        type="text"
                                        id="description"
                                        name="description"
                                        @if($category->description)
                                            value="{{$category->description}}"
                                        @else
                                            value="No definida"
                                        @endif
                                        disabled
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td><label for="status" class="uppercase">Estado:</label></td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center">

                                        {{-- <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                            type="radio"
                                            id="act"
                                            name="status"
                                            value="1"
                                            {{$category->status===1?'checked':''}}
                                            disabled> --}}
                                        <label for="status">{{$category->status===1?'ACTIVO':'INACTIVO'}}</label>

                                        {{-- <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                            type="radio"
                                            id="inact"
                                            name="status"
                                            value="0"
                                            {{$category->status===0?'checked':''}}
                                            disabled>
                                        <label for="inact">INACTIVO</label> --}}

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="text-center">
                        <a href="{{route('category.index')}}" class="btn btn-secondary mt-3 text-sm uppercase w-auto">
                            <strong>Cancelar</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
