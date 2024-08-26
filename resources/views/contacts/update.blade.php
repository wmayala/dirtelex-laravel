<x-app-layout>
    @section('title','Actualizar contacto')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("ACTUALIZAR CONTACTO") }}
                    </div>
                </div>

                <div class="row p-5">
                    <form action="{{route('contact.update',$contact->id)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="flex justify-center align-center">
                            <table class="col-6 w-75">
                                <tr>
                                    <td><label for="institution_id" class="uppercase">Institución:</label></td>
                                    <td>
                                        <select name="institution_id" id="institution_id" class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100">
                                            <option selected>{{$contact->institution->institution}}</option>
                                            @foreach($institutions as $institution)
                                                <option value="{{$institution->id}}">{{$institution->institution}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="division_id" class="uppercase">División:</label></td>
                                    <td>
                                        <select name="division_id" id="division_id" class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100">
                                            <option selected>{{ $contact->division?$contact->division->division:'No existen divisiones asociadas'}}</option>
                                            @foreach($divisions as $division)
                                                <option value="{{$division->id}}">{{$division->division}}</option>
                                            @endforeach
                                        </select>
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
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="position" class="uppercase">Cargo o área del contacto:</label></td>
                                    <td>
                                        <input class="mb-2 bg-gray-50 border border-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            type="text"
                                            id="position"
                                            name="position"
                                            value="{{$contact->position}}">
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
                                                value="{{$contact->code}}">

                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="phone"
                                                name="phone"
                                                value="{{$contact->phone}}">

                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="extension"
                                                name="extension"
                                                value="{{$contact->extension}}">
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="mobile"
                                                name="mobile"
                                                value="{{$contact->mobile}}">

                                            <input class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                                type="text"
                                                id="fax"
                                                name="fax"
                                                value="{{$contact->fax}}">
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
                                            value="{{$contact->email}}">
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="specialFeature" class="uppercase">Característica especial:</label></td>
                                    <td>
                                        <textarea class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            id="specialFeature"
                                            name="specialFeature"
                                        >{{$contact->specialFeature}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="clarification" class="uppercase">Aclaración relevante:</label></td>
                                    <td>

                                        <textarea class="mb-2 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 w-100"
                                            id="clarification"
                                            name="clarification"
                                            >{{$contact->clarification}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="typeContact" class="uppercase">Tipo de contacto:</label></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="person"
                                                    name="typeContact"
                                                    value="1"
                                                    {{$contact->typeContact===1?'checked':''}}>
                                                <label for="act">PERSONA</label>
                                            </div>
                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="col-6 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="area"
                                                    name="typeContact"
                                                    value="0"
                                                    {{$contact->typeContact===0?'checked':''}}>
                                                <label for="inact">ÁREA</label>
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
                                                    type="radio"
                                                    id="es"
                                                    name="language"
                                                    value="1"
                                                    {{$contact->language===1?'checked':''}}>
                                                <label for="es">ESPAÑOL</label>
                                            </div>
                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="col-6 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="en"
                                                    name="language"
                                                    value="0"
                                                    {{$contact->language==0?'checked':''}}>
                                                <label for="en">INGLÉS</label>
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
                                                    type="radio"
                                                    id="act"
                                                    name="status"
                                                    value="1"
                                                    {{$contact->status===1?'checked':''}}>
                                                <label for="act">ACTIVO</label>
                                            </div>
                                            <div class="col-6 d-flex align-items-center gap-2">
                                                <input class="col-6 bg-gray-50 border border-gray-800 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                                    type="radio"
                                                    id="inact"
                                                    name="status"
                                                    value="0"
                                                    {{$contact->status===0?'checked':''}}>
                                                <label for="inact">INACTIVO</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn mt-3 text-sm uppercase w-25" style="background-color: #111e60; color: #f2f2f2">
                                <strong>Guardar</strong>
                            </button>
                            <a href="{{route('contact.index')}}" class="btn btn-secondary mt-3 text-sm uppercase w-25">
                                <strong>Cancelar</strong>
                            </a>
                        </div>
                    </form>
                </div>
             </div>
         </div>
     </div>
 </x-app-layout>
