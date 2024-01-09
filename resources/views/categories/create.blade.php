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
                <div class="row p-5">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="flex justify-center align-center">
                            <table class="col-6">
                                <tr>
                                    <td><label for="category" class="uppercase">Nombre:</label></td>
                                    <td><input class="mb-2 bg-gray-50 border border-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100" type="text" id="category" name="category" placeholder="Escriba el nombre de la categoría" required></td>
                                </tr>
                                <tr>
                                    <td><label for="description" class="uppercase">Descripción:</label></td>
                                    <td><input class="mb-2 bg-gray-50 border border-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100" type="text" id="description" name="description" placeholder="Escriba una descripción"></td>
                                </tr>
                                <tr>
                                    <td><label for="status" class="uppercase">Estado:</label></td>
                                    <td>
                                        <div class="d-flex gap-2 align-items-center">
                                            <input class="bg-gray-50 border border-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="radio" id="act" name="status" value=1 checked>
                                            <label for="act">ACTIVO</label>
                                            <input class="bg-gray-50 border border-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="radio" id="inact" name="status" value=0>
                                            <label for="inact">INACTIVO</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn mt-3 text-sm uppercase w-auto" style="background-color: #111e60; color: #f2f2f2">
                                <i class="fa fa-bars mx-3"></i>
                                <strong>Guardar</strong>
                                <i class="fa fa-bars mx-3"></i>
                            </button>

                            <a href="{{route('category.index')}}" class="btn btn-secondary mt-3 text-sm uppercase w-auto">
                                <i class="fa fa-bars mx-3"></i>
                                <strong>Cancelar</strong>
                                <i class="fa fa-bars mx-3"></i>
                            </a>
                        </div>



                    </form>

                </div>







             </div>
         </div>
     </div>
 </x-app-layout>
