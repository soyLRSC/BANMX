<x-app-layout>
    <br>
    <div class="major container">

 
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                        Id</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Género</th>
                        <th>Fecha de nacimiento</th>
                        <th>Ine</th>
                        <th>Comprobante de domicilio</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Código postal</th>
                        <th>Certificado medico</th>
                        <th>Acuerdo firmado</th>
                        <th>Autorización</th>
                        <th>Reglamento</th>
                        <th>Nombre Contacto de emergencia</th>
                        <th>Telefono Contacto de emergencia</th>
                        <th>Fecha de ingreso</th>
                        <th>Área principal</th>
                        <th>Área alternativa uno</th>
                        <th>Área alternativa dos</th>
                        <th>especiales</th>
                        <th>foto</th>
                       
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
              
                    @foreach ($registros as $registro)
                        <tr>
                             <td>{{ $registro->id }}</td>
                            <td>{{ $registro->nombre }}</td>
                            <td>{{ $registro->apellido_p }}</td>
                            <td>{{ $registro->apellido_m }}</td>
                            <td>{{ $registro->genero }}</td>
                            <td>{{ $registro->nac }}</td>
                            <td><a href="{{ asset('storage/' . $registro->ine) }}" download>Descargar INE</a></td>
                            <td><a href="{{ asset('storage/' . $registro->domicilio) }}" download>Descargar comprobante de domicilio</a></td>
                            <td>{{ $registro->calle }}</td>
                            <td>{{ $registro->colonia }}</td>
                            <td>{{ $registro->municipio }}</td>
                            <td>{{ $registro->codigop}}</td>
                            <td><a href="{{ asset( 'storage/' . $registro->certificadom) }}" dowload>Descargar certificado medico</a></td>
                            <td><a href="{{ asset( 'storage/' .$registro->acuerdo )}} " download>Descargar acuerdo</a></td>
                            <td><a href="{{asset( 'storage/'.$registro->autorizacion) }}" download>Descargar autorización</a></td>
                            <td><a href="{{ asset( 'storage/'.$registro->reglamento) }}"download>Descargar reglamento</a></td>
                            <td>{{ $registro->contactoemergencia }}</td>
                            <td>{{ $registro->telefonoemergencia }}</td>
                            <td>{{ $registro->fechaingreso }}</td>
                            <td>{{ $registro->areaPrincipal->nombre }}</td>
                            <td>{{ $registro->areaAlternativaUno->nombre }}</td>
                            <td>{{ $registro->areaAlternativaDos->nombre }}</td>
                            <td>{{ $registro->especiales }}</td>
                            <td><img src="{{ asset('storage/' . $registro->foto) }}" alt="Foto" width="200"><a href="{{ asset('storage/' . $registro->foto) }}" download>Descargar foto</a></td>
                            <td>
                                <a href="{{ route('registros.edit', $registro) }}"
                                class="btn btn-outline-primary">Editar</a>
                            </td>
                            <td>


                                <form action="{{ route('registros.destroy', $registro) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('registros.create') }}" class="btn btn-secondary">Registrar voluntario</a>
    </div>
</x-app-layout>