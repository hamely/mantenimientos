
@extends('admin.layout.master')

@section('content')

 <div class="right_col" role="main">
 <section class="content-header">

	<div class="form-group">
		  <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name"> 
		  	Buscar Id 
	      </label>
      
		   <div class="col-md-3 col-sm-3 col-xs-6">
		   
		     <input type="text" class="form-control"  id="codigoBuscar" placeholder="Buscar id">
		  <br>
		  </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
           
             <button class="btn btn-success" id="BuscarEquipo"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          <br>
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

                    Equipos 
                   
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
							
 					 	        	@include('admin.equipo_principal.registrar')
		                      
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

    var opcion;
    var  trValue;
    if(opcion=='1')
    {
      opcion=1;
      var url='{{ route('listarEquipoCategoria') }}';
    }
    if(opcion=='2')
    {
      opcion=2;
      var url='{{ route('listarMarcas') }}';
    }
    if(opcion=='3')
    {
      opcion=3;
      var url='{{ route('listarTipos') }}';
     
    }
    if(opcion=='4')
    {
      opcion=4;
      var url='{{ route('listarPaises') }}';
    }
    if(opcion=='5')
    {
      opcion=5;
      var url='{{ route('listarEmpresas') }}';
    }
    
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
                 

	                     if(opcion=='1')
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

	                	 if(opcion=='2')
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

						 if(opcion=='3')
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

		                    if(opcion=='4')
		                    {
		                        $.each(respuesta.data,function(index,element)
		                            { 
		                              htmlListar=htmlListar + "<tr value='"+element.id+"'>"+ 
		                                                      "<td id='codigo'>"+element.id+" </td>"+
		                                                      "<td class='boton' style='cursor:pointer;'>"+element.nombre+"</td>"+
		                                                    "</tr>";
		                            });

		                            $("#tableListar").html(htmlListar);
		                    }

		                    if(opcion=='5')
		                    {
		                        $.each(respuesta.data,function(index,element)
		                            { 
		                              htmlListar=htmlListar + "<tr value='"+element.id+"'>"+ 
		                                                      "<td id='codigo'>"+element.nombre+" </td>"+
		                                                      "<td class='boton' style='cursor:pointer;'>"+element.nombre+"</td>"+
		                                                    "</tr>";
		                            });

		                            $("#tableListar").html(htmlListar);
		                    }



	                	 $('#Busquedas').modal('show');


                    }
              });


             $(".table").on('click','tr',function(e){
                    e.preventDefault();
                    var trValue= $(this).attr('value');
                    var name= $(this).find("td:last-child").text();


                    if(opcion=='1')
                    {
                      
                      opcion=0;
                      $('#id_equipo_padre').val(trValue);
                      $('#equipo_padre').val(name);
                        
                    }
                    if(opcion=='2')
                    {
                      opcion=0;
                      
                      $('#id_marca').val(trValue);
                      $('#marca').val(name);
              
                    }
                    if(opcion=='3')
                    {
                     
                      opcion=0;
                      $('#id_tipo').val(trValue);
                      $('#tipo').val(name);
                   
                    }
                    if(opcion=='4')
                    {
                      opcion=0;
                      $('#id_ubicacion').val(trValue);
                      $('#ubicacion').val(name);
                    
                    }
                    if(opcion=='5')
                    {
                      opcion=0;
                      $('#id_empresa').val(trValue);
                      $('#empresa').val(name);
                    
                    }

                      $('#Busquedas').modal('hide');
                  
                }); 
      }
$(function() 
{

  
     $('#form_equipo').bootstrapValidator({
            container: '#messages',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
             submitHandler: function(validator, form, submitButton) {

                 
                     $.ajax({                        
                            url:'{{ route('CrearEquipoPrincipal') }}',
                             type: 'POST',           
                            data: $("#form_equipo").serialize(), 
                            success: function(data)             
                            {
                                    $("#id").val(data.id);
                                   Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Se registro correctamente',
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
                
                 peso: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere peso'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },
                 peso: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+([,][0-9]+)?$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },
                 modelo: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere modelo'
                        }
                    }
                },
                 altura: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+([,][0-9]+)?$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },
                peso_envio: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+([,][0-9]+)?$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },
                 ancho: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+([,][0-9]+)?$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },
                largo: {
                    validators: {
                        notEmpty: {
                            message: 'Requiere codigo'
                        },

                       regexp: {
               
                         regexp: /^[0-9]+([,][0-9]+)?$/,
               
                         message: 'Solo se puede ingresar número'
               
                       }
                    }
                },

            }


        })

      

      
      $("#limpiarCaja" ).click(function() {
          // $("#form_equipo")[0].reset();
           location.reload();
        });

      $("#BuscarEquipo" ).click(function() {
            var codigo=$("#codigoBuscar").val();
             $.ajax({                        
                            url:'{{ route('BuscarEquipoPrincipal') }}',
                             type: 'POST',
                             data:{
                                    "_token": "{{ csrf_token() }}",
                                     "codigo":codigo,
                                },
                            success: function(respuesta)             
                            {
                                $.each(respuesta.data,function(index,element)
                                    { 
                                      
                                      $("#codigo").val(element.idequipo);

                                      $("#marca").val(element.codigo);
                                      $("#id_marca").val(element.id_marca);

                                      $("#descripcion").val(element.descripcion);

                                      $("#ubicacion").val(element.nombrePais);
                                      $("#id_ubicacion").val(element.id_pais);

                                      $("#empresa").val(element.nombreEmpresa);
                                      $("#id_empresa").val(element.id_empresa);

                                      $("#modelo").val(element.modelo);
                                      $("#peso").val(element.peso);
                                      $("#peso_envio").val(element.peso_envio);

                                      $("#altura").val(element.altura);
                                      $("#ancho").val(element.ancho);
                                      $("#largo").val(element.largo);

                                       $("#umedimens").val(element.umedimens);
                                       $("#cantidad").val(element.cantidad);
                                       $("#potencia").val(element.potencia);
                                       $("#id").val(element.id);

                                    });
                                    $('#btnActualizar').attr("disabled", false);
                              
                            }
                  });
        });

      
       $("#btnActualizar" ).click(function() {
        $.ajax({                        
                            url:'{{ route('ActualizarEquipoPrincipal') }}',
                             type: 'POST',           
                            data: $("#form_equipo").serialize(), 
                            success: function(data)             
                            {
                                   Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Se actuzalizo correctamente su información',
                                showConfirmButton: false,
                                timer: 1500
                                 })
                              

                            }
        });   
    });   
});       

       
     
</script>

@endsection


