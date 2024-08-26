<x-app-layout>
    @section('title','Detalles del contacto')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row p-3 text-gray-900">
                    <div class="fs-3">
                        {{ __("DETALLES") }}
                    </div>
                </div>
                <div class="row p-5">
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
                                        value="{{ $contact->division?$contact->division->division:'No existen divisiones asociadas'}}"
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
                    <div class="text-center">
                        <button class="btn btn-secondary mt-3 text-sm uppercase col-3" onclick="history.back()">
                            <strong><< Regresar</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
