<x-guest-layout>
    @section('title','Contactos')

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900 fs-3">
                    <div class="col-6">
                        {{ __("CONTACTOS") }}
                    </div>
                </div>

                @include('layouts.search')

                <div class="p-3">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>TELEFONO</th>
                                        <th>CORREO ELECTRÓNICO</th>
                                        <th>INSTITUCIÓN</th>
                                        <th>CATEGORÍA</th>
                                        <th>SUBCATEGORÍA</th>
                                        <th class="text-center">ACCIONES</th>
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>
                                            <span class="fw-bold fs-5 fst-italic">{{$contact->contact}}</span><br>
                                            <span>{{$contact->position?$contact->position:''}}</span>
                                        </td>
                                        <td>
                                            <span>{{$contact->code?'('.$contact->code.') ':''}}</span><br>
                                            <span>{{$contact->phone?'Tel.: '.$contact->phone:''}}</span><br>
                                            <span>{{$contact->mobile?'Cel.: '.$contact->mobile:''}}</span><br>
                                            <span>{{$contact->extension?'Ext.: '.$contact->extension:''}}</span><br>
                                            <span>{{$contact->fax?'Fax: '.$contact->fax:''}}</span>
                                        </td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->institution->institution}}</td>
                                        <td>{{$contact->institution->category->category}}</td>
                                        <td>{{$contact->institution->subcategory->subcategory}}</td>
                                        <td class="text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{route('contact.show', $contact->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if($contact->status==1)
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
