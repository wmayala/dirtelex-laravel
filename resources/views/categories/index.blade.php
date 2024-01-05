<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("CATEGORIAS") }}
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn rounded uppercase fw-bold w-50 d-flex justify-content-between align-items-center" style="background-color: #111e60; color: #f2f2f2;" href="#">
                            <i class="fa fa-bars"></i>
                            Agregar
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-3">

                    <label for="search" class="form-label">Buscar</label>
                    <input class="form-control" type="text" id="search">

                </div>
                <div class="container p-3">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th class="text-center">ACCIONES</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $cat)
                                        <tr>
                                            <td>{{$cat->category}}</td>
                                            <td>
                                                @if(!$cat->description)
                                                    No definida
                                                @else
                                                    {{$cat->description}}
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="text-center">
                                                @if($cat->status==1)
                                                    <span class="badge bg-success">ACTIVO</span>
                                                @else
                                                    <span class="badge bg-danger">INACTIVO</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </x-app-layout>
