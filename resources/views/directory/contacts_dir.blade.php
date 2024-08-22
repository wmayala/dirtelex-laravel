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
                                        <th class="text-center">ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>
                                            <!-- Botón para abrir el modal -->
                                            <button
                                                x-data
                                                x-on:click="$dispatch('open-modal', '{{ $modalName = 'showInfo' }}')"
                                                class="text-start"
                                            >
                                                <div class="fw-bold fs-5 fst-italic">{{ $contact->contact }}</div>
                                                <div>{{$contact->position?$contact->position:''}}</div>
                                            </button>

                                            <!-- Implementación del modal -->
                                            <x-modal :name="$modalName" maxWidth="2xl">
                                                <div class="p-4" style="background-color: #eeeff1;">
                                                    <h2 class="fs-3 font-bold mb-4">DETALLES</h2>
                                                    <hr class="mb-4">
                                                    <div class="row">
                                                        <div class="flex justify-center align-center">
                                                            <table class="col-6 w-75">
                                                                <tr>
                                                                    <td><label for="institution_id" class="uppercase">Institución:</label></td>
                                                                    <td>
                                                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            type="text"
                                                                            id="institution_id"
                                                                            name="institution_id"
                                                                            value="{{$contact->institution->institution}}"
                                                                            disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="division_id" class="uppercase">División:</label></td>
                                                                    <td>
                                                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            type="text"
                                                                            id="division_id"
                                                                            name="division_id"
                                                                            value="{{$contact->division->division}}"
                                                                            disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="contact" class="uppercase">Nombre:</label></td>
                                                                    <td>
                                                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            type="text"
                                                                            id="contact"
                                                                            name="contact"
                                                                            value="{{$contact->contact}}"
                                                                            disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="position" class="uppercase">Cargo o área del contacto:</label></td>
                                                                    <td>
                                                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            type="text"
                                                                            id="position"
                                                                            name="position"
                                                                            value="{{$contact->position}}"
                                                                            disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="phone" class="uppercase">Teléfono:</label></td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                type="text"
                                                                                id="code"
                                                                                name="code"
                                                                                value="{{$contact->code}}"
                                                                                disabled>

                                                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                type="text"
                                                                                id="phone"
                                                                                name="phone"
                                                                                value="{{$contact->phone}}"
                                                                                disabled>

                                                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                type="text"
                                                                                id="extension"
                                                                                name="extension"
                                                                                value="{{$contact->extension}}"
                                                                                disabled>
                                                                        </div>
                                                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                type="text"
                                                                                id="mobile"
                                                                                name="mobile"
                                                                                value="{{$contact->mobile}}"
                                                                                disabled>

                                                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                                type="text"
                                                                                id="fax"
                                                                                name="fax"
                                                                                value="{{$contact->fax}}"
                                                                                disabled>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="email" class="uppercase">Correo electrónico:</label></td>
                                                                    <td>
                                                                        <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            type="email"
                                                                            id="email"
                                                                            name="email"
                                                                            value="{{$contact->email}}"
                                                                            disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="specialFeature" class="uppercase">Característica especial:</label></td>
                                                                    <td>
                                                                        <textarea class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            id="specialFeature"
                                                                            name="specialFeature"
                                                                            disabled
                                                                        >{{$contact->specialFeature}}</textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="clarification" class="uppercase">Aclaración relevante:</label></td>
                                                                    <td>

                                                                        <textarea class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                                            id="clarification"
                                                                            name="clarification"
                                                                            disabled
                                                                        >{{$contact->clarification}}</textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="typeContact" class="uppercase">Tipo de contacto:</label></td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="col-6 d-flex align-items-center gap-2">
                                                                                <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                                                    type="text"
                                                                                    id="person"
                                                                                    name="typeContact"
                                                                                    value="{{$contact->typeContact===1?'PERSONA':'ÁREA'}}">

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="language" class="uppercase">Idioma:</label></td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="col-6 d-flex align-items-center gap-2">
                                                                                <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                                                    type="text"
                                                                                    id="es"
                                                                                    name="language"
                                                                                    value="{{$contact->language===1?'ESPAÑOL':'INGLÉS'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="status" class="uppercase">Estado:</label></td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="col-6 d-flex align-items-center gap-2">
                                                                                <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                                                    type="text"
                                                                                    id="act"
                                                                                    name="status"
                                                                                    value="{{$contact->status===1?'ACTIVO':'INACTIVO'}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-4">
                                                    <div class="text-end">
                                                        <button
                                                            x-on:click="$dispatch('close-modal', '{{ $modalName }}')"
                                                            class="mt-4 px-4 py-2 btn btn-secondary text-white rounded"
                                                        >
                                                            Cerrar
                                                        </button>
                                                    </div>
                                                </div>
                                            </x-modal>
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
