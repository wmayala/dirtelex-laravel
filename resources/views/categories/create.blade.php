<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("AGREGAR CATEGORIAS") }}
                    </div>
                </div>
                    {{-- <div class="col-6 d-flex justify-content-end">
                        <a class="btn rounded uppercase fw-bold w-50 d-flex justify-content-between align-items-center" style="background-color: #111e60; color: #f2f2f2;" href="#">
                            <i class="fa fa-bars"></i>
                            Agregar
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> --}}
                <div class="row flex justify-center align-center p-5">
                    <table class="col-6">
                        <tr>
                            <td><label for="name" class="text-gray-900 uppercase">Nombre:</label></td>
                            <td><input class="mb-2 bg-gray-50 uppercase border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100" type="text" id="name" placeholder="Escriba el nombre de la categoría"></td>
                        </tr>
                        <tr>
                            <td><label for="description" class="text-gray-900 uppercase">Descripción:</label></td>
                            <td><input class="mb-2 bg-gray-50 uppercase border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100" type="text" id="description" placeholder="Escriba una descripción"></td>
                        </tr>
                        <tr>
                            <td><label for="status" class="text-gray-900 uppercase">Estado:</label></td>
                            <td>
                                <div class="d-flex gap-2 align-items-center">
                                    <input class="bg-gray-50 space-uppercase border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="radio" id="act" name="status" value=1>
                                    <label for="act">Activo</label>
                                    <input class="bg-gray-50 uppercase border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="radio" id="inact" name="status" value=0>
                                    <label for="inact">Inactivo</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <button class="btn mt-3" style="background-color: #111e60; color: #f2f2f2">Guardar</button>

                                <a href="{{route('category.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
                            </td>

                        </tr>
                    </table>
                </div>







             </div>
         </div>
     </div>
 </x-app-layout>
