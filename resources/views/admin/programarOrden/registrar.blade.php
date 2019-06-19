<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Código
    </label>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
    </div>

</div>
<div class="form-group">
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Descripción    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
    </div>
</div>

<hr/>
<div class="panel panel-default">
  <div class="panel-heading">Método de programación</div>
  <div class="panel-body">
  
    <div class="form-group">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Última vez que se programó</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Última vez que se terminó</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Vencimiento de lectura</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="checkbox" id="cbox1" value="first_checkbox"> Por promedio de lecturao</label><br>
        </div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content6" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Última programación</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Última terminada</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Vencimiento de lectura</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content9" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Promedio Lecturas</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content6" aria-labelledby="home-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia" name="frecuencia" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                                                        
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
                        
                           <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia" name="frecuencia" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Medidor</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="medidor" name="medidor" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Medidor','1')"><span class="fa fa-search-plus"></span></button>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content9" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Medidor</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="medidor" name="medidor" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-info btn-xs" onclick="busquedaFunction('Medidor','1')"><span class="fa fa-search-plus"></span></button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia" name="frecuencia" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Lectura</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="lectura" name="lectura" required="required" class="form-control col-md-7 col-xs-12" placeholder="lectura de los ultimos dias">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Última vez</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="vez" name="vez" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
        </div>
    </div>

    
  </div>
</div>
<div class="form-group">    
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Prioridad programada
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="number" id="prioridad" name="prioridad" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    
</div>
<div class="form-group">    
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">TM Estimado
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="tm" name="tm" required="required" class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-group">    
    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Dias estimados para terminar
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="dias_estimados" name="dias_estimados" required="required" class="form-control col-md-7 col-xs-12">
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




