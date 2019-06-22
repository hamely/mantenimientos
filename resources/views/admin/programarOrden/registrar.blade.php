<form id="form_programacion" name="form_programacion" data-parsley-validate class="form-horizontal form-label-left">
{{ csrf_field() }}

<div class="form-group">
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name">Código
    </label>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <input type="text" id="codigo" name="codigo" class="form-control col-md-7 col-xs-12">
    </div>

    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Descripción    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="descripcion" name="descripcion"  class="form-control col-md-7 col-xs-12">
    </div>
</div>

<hr/>

<div class="form-group">    
    
     <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">TM Estimado
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="tm_estimado" name="tm_estimado"  class="form-control col-md-7 col-xs-12">
    </div>

    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Dias estimados para terminar
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <input type="text" id="dias_estimados" name="dias_estimados"  class="form-control col-md-7 col-xs-12">
    </div>


    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Usuario
    </label>
    <div class="col-md-3 col-sm-6 col-xs-12">
             <select class="form-control" id="id_usuario_tecnico" name="id_usuario_tecnico[]" multiple>
                @foreach($usuarios as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
    </div>

</div>
<div class="form-group">
   

    <div class="form-group">
        <label class="control-label col-md-1 col-sm-1 col-xs-1">
            Estado
        </label>
        <div class="col-md-1 col-sm-6 col-xs-12">
            <select class="form-control" id="estado">
              <option>Habilitado</option>
              <option>Deshabilitado</option>
            </select>
        </div>

         <label class="control-label col-md-1 col-sm-1 col-xs-1">Fecha de inicio
        </label>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <input id="fecha_inicio" name="fecha_inicio" class="date-picker form-control col-md-7 col-xs-12"  type="date">
        </div>

        <label class="control-label col-md-1 col-sm-1 col-xs-1">Fecha de fin
        </label>
        <div class="col-md-2 col-sm-3 col-xs-12">
            <input id="fecha_fin" name="fecha_fin" class="date-picker form-control col-md-7 col-xs-12"  type="date">
        </div>

    </div>

    
        

</div>


<div class="panel panel-default">
  <div class="panel-heading">Método de programación</div>
  <div class="panel-body">
 <div class="form-group">


        <div class="col-md-3 col-sm-3 col-xs-12">

            <label><input type="radio" id="tipo_programacion" name="tipo_programacion" value="01" checked="checked"> Última vez que se programó</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="radio" id="tipo_programacion" name="tipo_programacion" value="02"> Última vez que se terminó</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="radio" id="tipo_programacion" name="tipo_programacion" value="03"> Vencimiento de lectura</label><br>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <label><input type="radio" id="tipo_programacion" name="tipo_programacion" value="04"> Por promedio de lecturao</label><br>
        </div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content01" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Última programación</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content02" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Última terminada</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content03" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Vencimiento de lectura</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content04" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Promedio Lecturas</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content01" aria-labelledby="home-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia" name="frecuencia"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                                                        
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content02" aria-labelledby="profile-tab">
                           <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia1" name="frecuencia1"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content03" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Medidor</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="medidor" name="medidor"  class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="medidor_id" name="medidor_id"  class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-info btn-xs" onclick="busquedaMedidor('Medidor','1')"><span class="fa fa-search-plus"></span></button>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content04" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Medidor</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="medidor1" name="medidor1"  class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="medidor_id_1" name="medidor_id_1"  class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-info btn-xs" onclick="busquedaMedidor('Medidor','1')"><span class="fa fa-search-plus"></span></button>
                                </div>

                                
                            </div>
                            
                          
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Lectura</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="lectura" name="lectura"  class="form-control col-md-7 col-xs-12" placeholder="lectura de los ultimos dias">
                                </div>


                                 <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Última vez</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="vez" name="vez"  class="form-control col-md-7 col-xs-12">
                                </div>

                                <label class="control-label col-md-1 col-sm-1 col-xs-1" for="last-name">Frecuencia</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" id="frecuencia2" name="frecuencia2"  class="form-control col-md-2 col-xs-12">
                                </div>


                            </div>
                          
                            
                           
                        </div>
                    </div>
        </div>
    </div>

    
  </div>
</div>






<div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button class="btn btn-primary" type="button">Cancel</button>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
</div>

</form>

<div class="panel panel-default">
  <div class="panel-heading">PROMACIÓN</div>

      <div class="panel-body">
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre y apellido</th>
            <th>Cargo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>Fecha</td>
            <td>
                <button type="button" class="btn btn-success btn-xs">responsable</button>
            </td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>Fecha</td>
            <td>
                <button type="button" class="btn btn-success btn-xs">responsable</button>
            </td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>Fecha</td>
            <td>
                <button type="button" class="btn btn-success btn-xs">responsable</button>
            </td>
          </tr>
        </tbody>
      </table>

        
      </div>

</div>

@section('script')
  
<script>

               
    $(function() 
    {

 

      $("input[name=tipo_programacion]").click(function ()
      {    
   
         $('[href="#tab_content'+$('input:radio[name=tipo_programacion]:checked').val()+'"]').tab('show');

     });

           $('#form_programacion').bootstrapValidator({
            container: '#messages',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
             submitHandler: function(validator, form, submitButton) 
             {

                   $.ajax({                        
                           url:'{{ route('programacionCreate') }}',
                           type: 'POST',           
                           data: $("#form_programacion").serialize(), 
                           success: function(data)             
                           {
                              
                              console.log(data);
                              // $("#id").val(data.id);
                              //    Swal.fire({
                              //       position: 'top-end',
                              //       type: 'success',
                              //       title: 'Se registro correctamente su orden de servicio',
                              //       showConfirmButton: false,
                              //       timer: 1500
                              //    })
                           
                              
                           }
                     });
            },
            fields: {
                codigo: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                }
            }


        });

            
    });  
       
</script>

@endsection

