 <form id="form_equipo"  class="form-horizontal form-label-left">
	{{ csrf_field() }}
    <div class="form-group">
         <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Id
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12">
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
            <input type="text" id="equipo_padre" name="equipo_padre"  class="form-control col-md-7 col-xs-12">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Equipo padre ','1')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>

  	<div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Marca
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="marca" name="marca" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Marca','2')"><span class="fa fa-search-plus"></span></button>
        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Descripción
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="descripcion" name="descripcion" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Tipo
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="tipo" name="tipo" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Tipo','3')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
     
   <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Ubicación 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="ubicacion" name="ubicacion" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>

		<div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Ubicación','4')"><span class="fa fa-search-plus"></span></button>
        </div>

    </div>

    <div class="form-group">

        <label class="control-label col-md-1 col-sm-1 col-xs-1">Empresa
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="empresa" name="empresa" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>

		<div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Empresa','5')"><span class="fa fa-search-plus"></span></button>
        </div>

    </div>
    <div class="form-group">
         <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Modelo
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <input type="text" id="modelo"  name="modelo"  class="form-control col-md-7 col-xs-12">
        </div>

 		<label class="control-label col-md-1 col-sm-1 col-xs-1">Peso 
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" name="peso" id="peso"  class="form-control col-md-7 col-xs-12">
        </div>
		<label class="control-label col-md-1 col-sm-1 col-xs-1">Peso envio
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="peso_envio" name="peso_envio"  class="form-control col-md-7 col-xs-12">
        </div>

    </div>
    <div class="form-group">
         <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Altura
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <input type="text" id="altura" name="altura"  class="form-control col-md-7 col-xs-12">
        </div>

 		<label class="control-label col-md-1 col-sm-1 col-xs-1">Ancho 
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="ancho" name="ancho"  class="form-control col-md-7 col-xs-12">
        </div>
		<label class="control-label col-md-1 col-sm-1 col-xs-1">Largo
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="largo" name="largo"  class="form-control col-md-7 col-xs-12">
        </div>

    </div>
    <div class="form-group">
         <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Unidad Medida Medición
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
            <input type="text" id="umedimens" name="umedimens"  class="form-control col-md-7 col-xs-12">
        </div>

 		<label class="control-label col-md-1 col-sm-1 col-xs-1">Cantidad 
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="cantidad" name="cantidad"  class="form-control col-md-7 col-xs-12">
        </div>
		<label class="control-label col-md-1 col-sm-1 col-xs-1">Potencia
        </label>
        <div class="col-md-3 col-sm-3 col-xs-6">
          	<input type="text" id="potencia" name="potencia"  class="form-control col-md-7 col-xs-12">
        </div>

    </div>

    <div class="ln_solid"></div>
    Centro de costo
	<div class="ln_solid"></div>
	<div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Piezas 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="pieza" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Piezas','6')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">M. Obra 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="m_obra" name="m_obra" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('M. Obra ','7')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>
	<div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">Costo Misc. 
        </label>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <input id="costo_mis" name="costo_mis" class="date-picker form-control col-md-7 col-xs-12"  type="text">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Costo Misc.','8')"><span class="fa fa-search-plus"></span></button>
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button class="btn btn-primary" type="button">Cancel</button>
        <button type="submit" class="btn btn-success" id="create_equipo" name="create_equipo">Guardar</button>
    </div>
    </div>

</form>



