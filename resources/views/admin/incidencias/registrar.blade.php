<form id="incidencia_equipo" data-parsley-validate class="form-horizontal form-label-left">
{{ csrf_field() }}
<div class="form-group">
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Código
    </label>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">
        <input type="hidden" id="idCodigo" name="idCodigo" required="required" class="form-control col-md-7 col-xs-12">
    </div>

</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Tipos de Incidencias
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="equipo_incidencia" name="equipo_incidencia" class="form-control col-md-7 col-xs-12">
        <input id="id_incidencia" name="id_incidencia" class="form-control col-md-7 col-xs-12" type="tehidden">
         
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tipo de Incidencias ','1')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Equipo
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
      
        <input type="text" id="equipo_padre" name="equipo_padre" class="form-control col-md-7 col-xs-12">
        <input type="hidden" id="id_equipo" name="id_equipo" class="form-control col-md-7 col-xs-12">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Equipo','2')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">Tienda
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
       <input id="id_tienda" name="id_tienda" class="date-picker form-control col-md-7 col-xs-12"  type="hidden">
        <input id="tienda" name="tienda" class="date-picker form-control col-md-7 col-xs-12" type="text">
    </div>
     <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tienda o empresa','3')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">
        Motivo
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <textarea id="descripcion" name="descripcion" class="md-textarea form-control" rows="3" required="required"></textarea>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">
        Fecha
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input id="datepicker" name="fecha"  class="form-control" >
    </div>
    
</div>


<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

    <button class="btn btn-danger" type="button" id="limpiarCaja">Limpiar</button>
    <button type="submit" class="btn btn-success" id="create_incidencia" name="create_incidencia">Guardar</button>
    <button type="" class="btn btn-success" id="btnActualizar">Actualizar</button>
</div>
</div>

</form>



