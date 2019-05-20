<div class="table-responsive">
    <table id="inicio" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
        <th>Apellido</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ponentes as $ponente)
            <tr>
                <td>{!! $ponente->name !!}</td>
            <td>{!! $ponente->apellido !!}</td>
                <td>
                    {!! Form::open(['route' => ['ponentes.destroy', $ponente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ponentes.show', [$ponente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ponentes.edit', [$ponente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
