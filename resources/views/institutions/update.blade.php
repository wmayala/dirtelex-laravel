<x-app-layout>
    @section('title','Actualizar institutción')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("ACTUALIZAR INSTITUCIÓN") }}
                    </div>
                </div>

                <div class="row p-5">
                    <form action="{{route('institution.update',$institution->id)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="flex justify-center align-center">
                            <table class="col-6">
                                <tr>
                                    <td><label for="institution" class="uppercase">Nombre:</label></td>
                                    <td>
                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            type="text"
                                            id="institution"
                                            name="institution"
                                            value="{{$institution->institution}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="acronym" class="uppercase">Siglas:</label></td>
                                    <td>
                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            type="text"
                                            id="acronym"
                                            name="acronym"
                                            value="{{$institution->acronym}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="description" class="uppercase">Descripción:</label></td>
                                    <td>
                                        <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            type="text"
                                            id="description"
                                            name="description"
                                            @if($institution->description)
                                                value="{{$institution->description}}"
                                            @else
                                                value="No definida"
                                            @endif>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="category_id" class="uppercase">Categoría:</label></td>
                                    <td>
                                        <select name="category_id" id="category_id" class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100">
                                            <option  selected>{{$institution->category->category}}</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="subcategory_id" class="uppercase">Subcategoría:</label></td>
                                    <td>
                                        <select name="subcategory_id" id="subcategory_id" class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100">
                                            <option  selected>{{$institution->subcategory->subcategory}}</option>
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="status" class="uppercase">Estado:</label></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="act"
                                                    name="status"
                                                    value="1"
                                                    {{$institution->status===1?'checked':''}}>
                                                <label for="act">ACTIVO</label>
                                            </div>

                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="col-6 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="inact"
                                                    name="status"
                                                    value="0"
                                                    {{$institution->status===0?'checked':''}}>
                                                <label for="inact">INACTIVO</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn mt-3 text-sm uppercase w-25" style="background-color: #111e60; color: #f2f2f2">
                                <strong>Actualizar</strong>
                            </button>
                            <a href="{{route('institution.index')}}" class="btn btn-secondary mt-3 text-sm uppercase col-3">
                                <strong>Cancelar</strong>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
