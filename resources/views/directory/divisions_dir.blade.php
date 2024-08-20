<x-guest-layout>
    @section('title','Divisiones')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("DIVISIONES") }}
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
                                        <th>INSTITUCIÓN</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th class="text-center">ACCIONES</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($divisions as $division)
                                    <tr>
                                        <td class="col-3">{{$division->division}}</td>
                                        <td class="col-4">{{$division->institution->institution}}</td>
                                        <td class="col-3">{{$division->description?$division->description:'No definida'}}</td>
                                        <td class="text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{route('division.show', $division->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="{{route('division.edit', $division->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="col-4">

                                                    <form action="{{ route('division.delete', $division->id) }}" method="post">
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
                                            @if($division->status==1)
                                                <span class="badge bg-success w-100">ACTIVO</span>
                                            @else
                                                <span class="badge bg-danger w-100">INACTIVO</span>
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
</x-guest-layout>
