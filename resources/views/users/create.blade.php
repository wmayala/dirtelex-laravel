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
                    <form action="{{route('user.store')}}" method="post">
                        @csrf

                            <div class="flex justify-center align-center">
                                <table class="col-6">
                                    <tr>
                                        <td><label for="name" class="uppercase">Nombre:</label></td>
                                        <td>
                                            <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Escriba su nombre"
                                                required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="email" class="uppercase">Correo electrónico:</label></td>
                                        <td>
                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="email"
                                                name="email"
                                                placeholder="Escriba su correo electrónico">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="password" class="uppercase">Contraseña:</label></td>
                                        <td>
                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="password"
                                                id="password"
                                                name="password"
                                                placeholder="Escriba su contraseña">
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
                                                        checked>
                                                    <label for="act">ACTIVO</label>
                                                </div>

                                                <div class="col-6 d-flex align-items-center gap-2">
                                                    <input class="col-6 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                        type="radio"
                                                        id="inact"
                                                        name="status"
                                                        value="0">
                                                    <label for="inact">INACTIVO</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
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
