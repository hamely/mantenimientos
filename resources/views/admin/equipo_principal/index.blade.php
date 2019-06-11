@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>EQUIPOS<small></small></h3>
              </div>
            </div>
           

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                
                 
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{('/equipoPrincipal/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Crear    </i></a>
                    <h2><small></small></h2>
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
                  </div>
                  <div class="x_content">
                  
                    <table id="example" class="table table-striped table-bordered">
                      <thead style="background-color: #5A738E;color:#FFFFFF;">
                        <tr>
                          <th>Nº</th>
                          <th>CÓDIGO</th>
                          <th>MODELO</th>
                          <th>MARCA</th>
                          <th>PAÍS</th>
                          <th>CLIENTE</th>
                          <th>DESCRIPCIÓN</th>
                          <th>ACCIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                   @foreach($data as $item)

                      <tr>
                      <td>{{ $item->id}}</td>
                        <td>{{ $item->idequipo}}</td>
                        <td>{{ $item->modelo}}</td>
                        <td>{{ $item->descripcionMarca}}</td>
                        <td>{{ $item->nombrePais}}</td>
                        <td></td>
                        <td>{{ $item->descripcion}}</td>
                        <td>
                           {!! Form::open(['route' => ['equipoPrincipal.destroy', $item->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('equipoPrincipal.edit', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                        {!! Form::close() !!}

                        </td>
                      </tr>
                   @endforeach
                          
               
                
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

@endsection


@section('script')
   <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      } );
    } );
  </script>
@endsection