@extends('admin.layout.master')

@section('content')

 <div class="right_col" role="main">
 <section class="content-header">
	<div class="form-group">
		  <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name"> 
		  	Buscar Id 
	      </label>
        <button id="nuevo" name="nuevo" >Buscar</button>
		   <div class="col-md-3 col-sm-3 col-xs-6">
		   
		     <input type="text" class="form-control" placeholder="Buscar id">
		
		  </div>
	</div>
    </section>

          <div class="">
 					
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  @include('flash::message')
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    Generar orden de servicio
                   
                  </div>
                  <div class="x_content">

                  	 

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Principal</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Adicional</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">piezas</a>
                        </li>
                         <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">piezas</a>
                        </li>

                        
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

 					 		@include('admin.ordenServicio.registrar')
		                      
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <p>2</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p> 3</p>
                        </div>
                    </div>
                    </div>

                    </div>

                </div>
              </div>

            </div>
          </div>
        </div>

@endsection


<div class="modal fade" id="Busquedas" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="busquedaTitulo" name="busquedaTitulo">Busqueda</h4>
        </div>
        <div class="modal-body">
       
                    <table id="inicioDatable" class="table table-striped table-bordered table-condensed" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Tipo</th> 
                          <th>Descripcion</th>
                        </tr>
                      </thead>
                      <tbody id="tableListar" name="tableListar">
                       
                        
                      </tbody>
                    </table>
                  </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@section('script')



  
<script>

$('#btnActualizar').attr("disabled", true);

function busquedaFunction(titulo,opcion) {
 	
    $('#busquedaTitulo').html(titulo);

    if(opcion=='1')
    {
      var url='{{ route('listarIncidenciasPendientes') }}';
    }

    if(opcion=='2')
    {
      var url='{{ route('listarTipoMantenimiento') }}';
    }

    if(opcion=='3')
    {
      var url='{{ route('listarEmpresas') }}';
    }
    
    
    var opcionUrl;
    var htmlListar;
    $("#tableListar").html('');
    $.ajax({
                 url:url,
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                         "abbr":opcion,
                    },
                 dataType: 'JSON',
                 success: function(respuesta) {
                 console.log(respuesta);
                    if(opcion=='1' )
                    {
                        $.each(respuesta.data,function(index,element)
                            { 
                              htmlListar=htmlListar + "<tr value='"+element.idInsidencia+"'>"+ 
                                                      "<td id='codigo'>"+element.codigoEquipoIncidencia+" </td>"+
                                                      "<td id='tipoIncidencia'>"+element.tipoIncidencia+" </td>"+
                                                      "<td class='boton' style='cursor:pointer;'>"+element.descripIncidencia+"</td>"+
                                                    "</tr>";
                            });

                            $("#tableListar").html(htmlListar);
                    }
                    if(opcion=='2' )
                    {
                        $.each(respuesta.data,function(index,element)
                            { 
                              htmlListar=htmlListar + "<tr value='"+element.id+"'>"+ 
                                                      "<td id='codigo'>"+element.codigo+" </td>"+
                                                      "<td class='boton' style='cursor:pointer;'>"+element.descripcion+"</td>"+
                                                   
                                                    "</tr>";
                            });

                            $("#tableListar").html(htmlListar);
                    }

                     if(opcion=='3' )
                    {
                        console.log(respuesta);
                        $.each(respuesta.data,function(index,element)
                            { 
                              htmlListar=htmlListar + "<tr value='"+element.id+"'>"+ 
                                                      "<td id='codigo'>"+element.nombre+" </td>"+
                                                      "<td class='boton' style='cursor:pointer;'>"+element.descripcion+"</td>"+
                                                    "</tr>";
                            });

                            $("#tableListar").html(htmlListar);
                    }
                    
                      
                  }

              });
    

             $('#Busquedas').modal('show');
             
           

             $(".table").on('click','tr',function(e){
                    e.preventDefault();
                    var  trValue= $(this).attr('value');
                    var name= $(this).find("td:last-child").text();
             
                    if(opcion=='1')
                    {
                      opcion=0;
                      $('#incidencias_pendientes').val(name);
                      $('#id_incidencias_pendientes').val(trValue);
                      $('#Busquedas').modal('hide');
                    }
                     if(opcion=='2')
                    {
                      opcion=0;
                      $('#tipo_mantenimiento').val(name);
                      $('#id_tipo_mantenimiento').val(trValue);
                      $('#Busquedas').modal('hide');
                    }
                    if(opcion=='3')
                    {
                      opcion=0;
                      $('#tienda').val(name);
                      $('#id_tienda').val(trValue);
                      $('#Busquedas').modal('hide');
                    }
                  
                  
                }); 
      }
   
               
    $(function() 
    {

        //fecha inicio

        $('#datepicker').datepicker({
            format: "dd/mm/yyyy",
            endDate: new Date(),
            setDate: new Date(),
            language: "es",
            todayHighlight: true,
            toggleActive: true,
            clearBtn: true,
            autoclose: true
        });
        //fecha fin



           $('#incidencia_equipo').bootstrapValidator({
            container: '#messages',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
             submitHandler: function(validator, form, submitButton) {

                    $.ajax({                        
                           url:'{{ route('crearIncidencia_equipo') }}',
                           type: 'POST',           
                           data: $("#incidencia_equipo").serialize(), 
                           success: function(data)             
                           {
                              
                              $("#id").val(data.id);
                                 Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Se registro correctamente su Incidencia',
                                    showConfirmButton: false,
                                    timer: 1500
                                 })
                           
                              
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
                },
                
                 descripcion: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere descripción'
                        }
                    }
                },
                fecha: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere fecha'
                        }
                    }
                },


            }


        });


            $("#btn_buscar" ).click(function() {
            var codigo=$("#btn_incidencia").val();

             $.ajax({                        
                            url:'{{ route('BuscarIncidencia') }}',
                             type: 'POST',
                             data:{
                                    "_token": "{{ csrf_token() }}",
                                     "codigo":codigo,
                                },
                            success: function(respuesta)             
                            {

                                $.each(respuesta.data,function(index,element)
                                    { 
                                      
                                      $("#idCodigo").val(element.idInsidencia);

                                      $("#codigo").val(element.codigoEquipoIncidencia);

                                      $("#equipo_incidencia").val(element. descriptionTipoInsicencia);
                                      $("#id_incidencia").val(element.idTipoInsicencia);

                                      $("#id_equipo").val(element.idEquipo);
                                      $("#equipo_padre").val(element.descripcionEquipo);

                                      $("#tienda").val(element.nombreEmpresa);
                                      $("#id_tienda").val(element.idEmpresa);

                                      $("#descripcion").val(element.descripIncidencia);
                                      $( "#datepicker" ).datepicker().val(element.fecha_incidencia);


                                    });
                                     $('#btnActualizar').attr("disabled", false);
                              
                             }
                  });
        });



        $("#limpiarCaja" ).click(function() {
          // $("#form_equipo")[0].reset();
           location.reload();
        });


       $("#btnActualizar" ).click(function() {
        $.ajax({                        
                            url:'{{ route('ActualizarIncidencia') }}',
                             type: 'POST',           
                            data: $("#incidencia_equipo").serialize(), 
                            success: function(data)             
                            {
                                   Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Se actuzalizo correctamente su insidencia',
                                showConfirmButton: false,
                                timer: 1500
                                 })
                              

                            }
        });   
    });   
      
       
            
    });  
       
</script>

@endsection


