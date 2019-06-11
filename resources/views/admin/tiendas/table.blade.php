<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Nombre</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tiendas as $tienda)
            <tr>
                <td>{!! $tienda->codigo !!}</td>
            <td>{!! $tienda->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['tiendas.destroy', $tienda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tiendas.show', [$tienda->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tiendas.edit', [$tienda->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
