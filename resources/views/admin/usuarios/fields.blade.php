<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Contraseña', 'Contraseña:') !!}
    {!! Form::text('', null, ['class' => 'form-control','name'=>'password']) !!}
</div>
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Privilegios', 'Privilegios:') !!}
    <select class="form-control" id="privilege" name="privilege"> 
		<option value="admin"> Administrador </option>
		<option value="supervisor"> Supervisor </option>
		<option value="tecnico"> Técnico </option>
		<option value="visitante"> Visitantes </option>
    </select>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
