@extends('admin.layout.master')

@section('content')

 <div class="right_col" role="main">
 <section class="content-header">
	<div class="form-group">
		  <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name"> 
	      </label>
        <button id="nuevo" name="nuevo" class="btn btn-success" >Buscar</button>
		   <div class="col-md-3 col-sm-3 col-xs-6">
		   
		     <input type="text" class="form-control" placeholder="Buscar id" >
		
		  </div>
	</div>
    </section>


 					
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                <div class="x_content">

                  	 

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Principal</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

 					 		@include('admin.programarOrden.registrar')
		                      
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


function busquedaMedidor(titulo,opcion) {
 	
    $('#busquedaTitulo').html(titulo);

    if(opcion=='1')
    {
      var url='{{ route('listarMedidor') }}';
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

                        $.each(respuesta.data,function(index,element)
                            { 
                              htmlListar=htmlListar + "<tr value='"+element.id+"'>"+ 
                                                      "<td id='codigo'>"+element.codigo+" </td>"+
                                                      "<td class='boton' style='cursor:pointer;'>"+element.descripcion+"</td>"+
                                                    "</tr>";
                            });

                            $("#tableListar").html(htmlListar);
                 
                  
                      
                  }
              });

             $('#Busquedas').modal('show');
             
           

             $(".table").on('click','tr',function(e){
                    e.preventDefault();
                    var  trValue= $(this).attr('value');
                     var name= $(this).find("td:last-child").text();
                    if(opcion=='1')
                    {
                      $('#medidor').val(name);
                      $('#medidor_id').val(trValue);

                      $('#medidor1').val(name);
                      $('#medidor_id_1').val(trValue);

                      $('#Busquedas').modal('hide');
                    }
                   
                  
                }); 
      }     
     
</script>

@endsection


