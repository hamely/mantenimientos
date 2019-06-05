<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Id
    </label>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
    </div>

</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Nro de orden     </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="nro_orden" name="nro_orden" required="required" class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Incidencias pendientes
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="incidencias_pendientes" name="incidencias_pendientes" required="required" class="form-control col-md-7 col-xs-12">
        <input type="hidden" id="id_incidencias_pendientes" name="id_incidencia_pendiente"  class="form-control col-md-7 col-xs-12">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Incidencias pendientes ','1')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Tipo mantenimiento 
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="tipo_mantenimiento" name="tipo_mantenimiento" required="required" class="form-control col-md-7 col-xs-12">
        <input type="hidden" id="id_tipo_mantenimiento" name="id_tipo_mantenimiento"  class="form-control col-md-7 col-xs-12">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tipo mantenimiento ','2')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">Tienda
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input id="tienda" name="tienda" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">Estado
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
    <select class="form-control" id="estado">
      <option>Habilitado</option>
      <option>Deshabilitado</option>
    </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1">Fecha de orden
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input id="fecha_orden" name="fecha_orden" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
    </div>
    
</div>


<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="button">Cancel</button>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
</div>

</form>




