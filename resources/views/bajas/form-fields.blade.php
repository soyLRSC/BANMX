{{-- SELECT de voluntario --}}
<div class="form-floating mb-3">
    <select class="form-control" id="id_registro" name="id_registro" style="background-color: #E6E6FA;" required>
        <option value="">Seleccione un voluntario</option>
        @foreach ($registros as $registro)
            <option value="{{ $registro->id }}"
                {{ old('id_registro', $baja->id_registro ?? '') == $registro->id ? 'selected' : '' }}>
                {{ $registro->nombre }}
            </option>
        @endforeach
    </select>
    <label for="id_registro">Voluntario</label>
</div>

{{-- Campo de concepto/motivo --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Motivo"
        value="{{ old('concepto', $baja->concepto ?? '') }}" style="background-color: #E6E6FA;" required>
    <label for="concepto">Motivo</label>
</div>