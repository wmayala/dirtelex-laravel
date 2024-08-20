<x-guest-layout>
    @section('title','Instituciones')
    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
        <div class="mx-auto sm:px-6 lg:px-8 col-11">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("INSTITUCIONES") }}
                    </div>
                </div>

                @include('layouts.search')

                {{-- <div class="container p-3"> --}}
                <div class="p-3">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th></th>
                                        <th>DESCRIPCIÓN</th>
                                        <th>CATEGORÍA</th>
                                        <th>SUBCATEGORÍA</th>
                                        <th class="text-center">ACCIONES</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($institutions)
                                        @foreach($institutions as $institution)
                                        <tr>
                                            <td class="col-2">{{$institution->institution}}</td>
                                            <td class="text-center">{{$institution->acronym}}</td>
                                            <td class="col-3">{{$institution->description?$institution->description:'No definida'}}</td>
                                            <td class="col-3">{{$institution->category->category}}</td>
                                            <td class="col">{{$institution->subcategory->subcategory?$institution->subcategory->subcategory:'No posee subcategoría'}}</td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="{{route('institution.show', $institution->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{route('institution.edit', $institution->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="col-4">

                                                        <form action="{{ route('institution.delete', $institution->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" >
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                @if($institution->status==1)
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
</x-guest-layout>
