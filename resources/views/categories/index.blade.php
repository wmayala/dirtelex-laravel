<x-app-layout>
    
    @if(session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("CATEGORIAS") }}
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn rounded uppercase fw-bold w-50 d-flex justify-content-between align-items-center"
                            style="background-color: #111e60; color: #f2f2f2;" href="{{route('category.create')}}">
                            <i class="fa fa-bars"></i>
                            Agregar
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
                <form class="container"  action="">
                    <div class="mb-3 d-flex align-items-center justify-content-center gap-2">

                        <label for="search" class="mb-2 text-gray-900 uppercase">Buscar</label>
                        <input class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-50 p-2.5" type="text" id="search">
                        <button class="btn rounded uppercase fw-bold d-flex justify-content-between align-items-center w-auto" style="background-color: #111e60; color: #f2f2f2;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
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
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="col-5">{{$category->category}}</td>
                                            <td class="col-5">
                                                @if(!$category->description)
                                                    No definida
                                                @else
                                                    {{$category->description}}
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="{{route('category.show', $category->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{route('category.edit', $category->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>

                                                </div>

                                            </td>
                                            <td class="text-center">
                                                @if($category->status==1)
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
