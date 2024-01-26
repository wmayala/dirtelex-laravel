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

                <div class="row p-5">
                    <form  method="POST">
                        @csrf
                        <div class="flex justify-center align-center">
                            <table class="col-6">
                                <tr>
                                    <td><label for="email" class="uppercase">Correo electrónico:</label></td>
                                    <td>

                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            type="text"
                                            id="email"
                                            name="email"
                                            placeholder="Escriba correo electrónico"
                                            required>
                                        <button type="submit"
                                            class="btn rounded uppercase fw-bold d-flex justify-content-between align-items-center w-auto"
                                            style="background-color: #111e60; color: #f2f2f2;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </td>
                                </tr>


                            </table>
                        </div>
                            Correo encontrado: {{$result}}
                        <div class="text-center">
                            <button type="submit" class="btn mt-3 text-sm uppercase w-25" style="background-color: #111e60; color: #f2f2f2">
                                <strong>Guardar</strong>
                            </button>

                            <a href="{{route('subcategory.index')}}" class="btn btn-secondary mt-3 text-sm uppercase w-25">
                                <strong>Cancelar</strong>
                            </a>
                        </div>



                    </form>

                </div>







             </div>
         </div>
     </div>
 </x-app-layout>
