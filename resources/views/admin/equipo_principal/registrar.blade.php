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
        <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Equipo padre 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input type="text" id="equipo_padre" name="equipo_padre" required="required" class="form-control col-md-7 col-xs-12">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Equipo padre ')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
  
    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Descripción
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="descripcion" name="descripcion" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Descripción')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Tipo
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="tipo" name="tipo" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tipo')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
   <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Ubicación 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="ubicacion" name="ubicacion" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>

		<div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Ubicación')"><span class="fa fa-search-plus"></span></button>
        </div>

    </div>
    <div class="form-group">
         <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Edificio
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>

 		<label class="control-label col-md-1 col-sm-1 col-xs-1">Nivel 
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
		<label class="control-label col-md-1 col-sm-1 col-xs-1">Area
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>

    </div>

    <div class="ln_solid"></div>
    Centro de costo
	<div class="ln_solid"></div>
	<div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Piezas 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="pieza" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Piezas')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">M. Obra 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="m_obra" name="m_obra" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('M. Obra ')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
	<div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Costo Misc. 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="costo_mis" name="costo_mis" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Costo Misc.')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button class="btn btn-primary" type="button">Cancel</button>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </div>

</form>



