<x-app-layout>
    @section('title','Categorías')
    @if(session('success'))

    <script>
        function deleteObject()
        {
            event.preventDefault();
            var form=event.target.form;

            Swal.fire({
                     'title':'¿Eliminar?',
                'text':'',
                'icon':'danger',
                'showCancelButton':'true',
                'confirmButtonText':'Si, eliminar',
                'cancelButtonText':'Cancelar',
            },

            function (isConfirm){
                if(isConfirm)
                {
                    form.submit();
                }
            });


        }

    </script>

        <div class="d-flex justify-content-center">
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{session('success')}}</strong>
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

                @include('layouts.search')

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

                                                    <form action="{{ route('category.delete', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="deleteObject()">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>





                                                    {{-- <form action="{{route('category.delete', $category->id)}}" method="POST" id="deleteCategory">
                                                        @csrf @method('DELETE')
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-category="{{$category->id}}">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    data-category {{$category->id}}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        function confirmarEliminar() {
                                                            // Código para confirmar la eliminación
                                                            document.getElementById('eliminarForm').submit();
                                                        }
                                                    </script> --}}














                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if($category->status==1)
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
 </x-app-layout>
