@can('edit_'.$entity)
<a href="javascript:;" class="on-default seedetails btn btn-primary"><i class="fa fa-eye"></i></a>

    <a href="{{ route($entity.'.edit', [str_singular($entity) => $id])  }}" class="btndelete btn btn-danger">
            <i class="fa fa-pencil"></i> </a>
@endcan

@can('delete_'.$entity)
    {!! Form::open( ['method' => 'delete', 'url' => route($entity.'.destroy', ['user' => $id]), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
        <button type="submit" class="btndelete btn btn-danger">
            <i class="fa fa-trash-o"></i>
        </button>
    {!! Form::close() !!}
@endcan