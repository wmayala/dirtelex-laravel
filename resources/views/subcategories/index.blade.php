<x-app-layout>
    @section('title','Subcategorías')
    @if(session('success'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @elseif(session('danger'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{session('danger')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("SUBCATEGORIAS") }}
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn rounded uppercase fw-bold w-50 d-flex justify-content-between align-items-center"
                            style="background-color: #111e60; color: #f2f2f2;" href="{{route('subcategory.create')}}">
                            <i class="fa fa-bars"></i>
                            Agregar
                            <i class="fa fa-bars"></i>
                        </a>
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
                                        <th>DESCRIPCIÓN</th>
                                        <th>CATEGORÍA</th>
                                        <th class="text-center">ACCIONES</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($subcategories)
                                        @foreach($subcategories as $subcategory)
                                        <tr>
                                            <td class="col-3">{{$subcategory->subcategory}}</td>
                                            <td class="col-4">{{$subcategory->category->category}}</td>
                                            <td class="col-3">{{$subcategory->description?$subcategory->description:'No definida'}}</td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="{{route('subcategory.show', $subcategory->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{route('subcategory.edit', $subcategory->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">

                                                        <form action="{{ route('subcategory.delete', $subcategory->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="deleteObject()">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
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
 </x-app-layout>
