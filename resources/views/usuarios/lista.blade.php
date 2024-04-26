@extends('adminlte::page')


@section('title', 'Gestión de Cursos')

@section('content_header')
    <h1>Usuarios</h1>
@stop
@section('content')
    <div class="container">
        <div class="panel panel-primary">

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">

                            <br>
                            <ul data-widget="treeview" data-accordion="false">
                                @foreach ($user as $item)
                                    @foreach ($item as $u)
                                        
                                    @endforeach
                                    <li>{{ $u['id'] }}</li>
                                   
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@section('plugins.Datatables', true)

<table id="example" class="table table-striped table-bordered" style="width:100%">

</table>


@stop



@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="js/dataTables.treeGrid.js"></script>
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
    $(document).ready(function() {
        $('#example').dataTable({
            data: <?php echo json_encode($user); ?>,
            columns: [{
    
                    title: "id",
                    data: 'id',

                },
                {
                    title: "username",
                    data: 'username',

                },
            ],
            'treeGrid': {
                'left': 20,
                'expandIcon': '<i class="fas fa-solid fa-plus text-success "></i>',
                'collapseIcon': '<i class="fas fa-solid fa-minus text-danger"></i>'
            }
        });

    });
</script>
@stop
