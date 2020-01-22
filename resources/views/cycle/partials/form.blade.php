<div class="form-group">
{{ Form::label('cycle_year', 'Año del ciclo escolar:') }}
{{ Form::text('cycle_year', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('cycle_init', 'Inicio del ciclo escolar:')}}
    {{ Form::date('cycle_init', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('cycle_init', 'Fin del ciclo escolar:')}}
    {{ Form::date('cycle_finish', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
{{ Form::label('period_type', 'Tipo de ciclo escolar:') }}
<select id="school" name="school" class="form-control">
    <option value="1">Bimestre</option>
    <option value="2">Trimestre</option>
    <option value="3">Semestre</option>
</select>
</div>
<div class="form-group">
{{ Form::label('commentary', 'Comentario:') }}
{{ Form::textarea('commentary', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>
<div class="form-group">
{{ Form::label('school', 'Colegio:') }}
<select id="school" name="school" class="form-control">
    <option value="1">Colegio example 1</option>
</select>
</div>

<button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar los cambios realizados?')">
    <i class="fa fa-save"></i> Guardar
</button>