{{-- Nombre --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
        value="{{ old('nombre', $registro->nombre ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="nombre">Nombre</label>
</div>

{{-- Apellido Paterno --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido Paterno"
        value="{{ old('apellido_p', $registro->apellido_p ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="apellido_p">Apellido Paterno</label>
</div>

{{-- Apellido Materno --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido Materno"
        value="{{ old('apellido_m', $registro->apellido_m ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="apellido_m">Apellido Materno</label>
</div>

{{-- Género --}}
<div class="form-floating mb-3">
    <select class="form-select" id="genero" name="genero" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona su género</option>
        <option value="masculino" {{ old('genero', $registro->genero ?? '') == 'masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="femenino" {{ old('genero', $registro->genero ?? '') == 'femenino' ? 'selected' : '' }}>Femenino</option>
          <option value="no desea decirlo" {{ old('genero', $registro->genero ?? '') == 'no desea decirlo' ? 'selected' : '' }}> No desea decirlo</option>
       
    </select>
    <label for="motivo">Género</label>
</div>

{{-- Fecha de Nacimiento --}}
<div class="form-floating mb-3">
    <input type="date" class="form-control" id="nac" name="nac" placeholder="Fecha de Nacimiento"
        value="{{ old('nac', $registro->nac ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="nac">Fecha de Nacimiento</label>
</div>

{{-- INE --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="ine" name="ine" placeholder="INE"
       >
    <label for="ine">INE</label>
</div>

{{-- Domicilio --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio"
        >
    <label for="domicilio">Comprobante de Domicilio</label>
</div>

{{-- Calle --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle"
        value="{{ old('calle', $registro->calle ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="calle">Calle</label>
</div>

{{-- Colonia --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia"
        value="{{ old('colonia', $registro->colonia ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="colonia">Colonia</label>
</div>

{{-- Municipio --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio"
        value="{{ old('municipio', $registro->municipio ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="municipio">Municipio</label>
</div>

{{-- Código Postal --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="codigop" name="codigop" placeholder="Código Postal"
        value="{{ old('codigop', $registro->codigop ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="codigop">Código Postal</label>
</div>

{{-- Certificado Médico --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="certificadom" name="certificadom" placeholder="Certificado Médico"
     >
    <label for="certificadom">Certificado Médico</label>
</div>

{{-- Acuerdo --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="acuerdo" name="acuerdo" placeholder="Acuerdo"
       >
    <label for="acuerdo">Acuerdo Firmado</label>
</div>

{{-- Autorización --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="autorizacion" name="autorizacion" placeholder="Autorización"
       >
    <label for="autorizacion">Autorización</label>
</div>

{{-- Reglamento --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="reglamento" name="reglamento" placeholder="Reglamento"
        >
    <label for="reglamento">Reglamento</label>
</div>

{{-- Contacto Emergencia --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="contactoemergencia" name="contactoemergencia" placeholder="Contacto de Emergencia"
        value="{{ old('contactoemergencia', $registro->contactoemergencia ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="contactoemergencia">Contacto de Emergencia (Nombre)</label>
</div>

{{-- Teléfono Emergencia --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefonoemergencia" name="telefonoemergencia" placeholder="Teléfono de Emergencia"
        value="{{ old('telefonoemergencia', $registro->telefonoemergencia ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="telefonoemergencia">Teléfono de Emergencia</label>
</div>

{{-- Fecha Ingreso --}}
<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fechaingreso" name="fechaingreso" placeholder="Fecha de Ingreso"
        value="{{ old('fechaingreso', $registro->fechaingreso ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="fechaingreso">Fecha de Ingreso</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="principal" name="principal" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        @foreach ($areas as $area)
            <option value="{{ $area->id }}" 
                {{ old('principal', $registro->principal ?? '') == $area->id ? 'selected' : '' }}>
                {{ $area->nombre }}
            </option>
        @endforeach
    </select>
    <label for="id_area_salida">Área principal</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="alternativa_uno" name="alternativa_uno" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        @foreach ($areas as $area)
            <option value="{{ $area->id }}" 
                {{ old('alternativa_uno', $registro->alternativa_uno ?? '') == $area->id ? 'selected' : '' }}>
                {{ $area->nombre }}
            </option>
        @endforeach
    </select>
    <label for="alternativa_uno">Área alternativa uno</label>
</div>

<div class="form-floating mb-3">
    <select class="form-select" id="alternativa_dos" name="alternativa_dos" style="background-color: #E6E6FA;" required>
        <option value="" disabled selected>Selecciona área</option>
        @foreach ($areas as $area)
            <option value="{{ $area->id }}" 
                {{ old('alternativa_dos', $registro->alternativa_dos ?? '') == $area->id ? 'selected' : '' }}>
                {{ $area->nombre }}
            </option>
        @endforeach
    </select>
    <label for="alternativa_dos">Área alternativa dos</label>
</div>

{{-- Especiales --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="especiales" name="especiales" placeholder="Observaciones Especiales"
        value="{{ old('especiales', $registro->especiales ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="especiales">Observaciones Especiales</label>
</div>

{{-- Foto --}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="foto" name="foto" style="background-color: #E6E6FA;">
    <label for="foto">Foto</label>
</div>