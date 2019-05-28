<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Id
    </label>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
    </div>
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name"> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">Activo Prioridad 
    </label>

    <div class="col-md-3 col-sm-3 col-xs-6">
      
      <select class="form-control" id="prioridad" name="prioridad">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
       </select>

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
        <input type="text" id="equipo_padre" name="equipo_padre" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Incidencias ','1')"><span class="fa fa-search-plus"></span></button>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Tipo mantenimiento 
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="tipo_mantenimiento" name="tipo_mantenimiento" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tipo mantenimiento ','1')"><span class="fa fa-search-plus"></span></button>
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




