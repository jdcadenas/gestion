@extends('adminlte::page')


@section('title', 'Gestión de Cursos')

@section('content_header')
    <h1>Categorías</h1>
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
                                @foreach ($tree as $item)
                                    <li>{{ $item['name'] }}</li>
                                    @if (isset($item['children']))
                                        <ul>
                                            @foreach ($item['children'] as $child)
                                                @include('categories.partials', ['item' => $child])
                                            @endforeach
                                        </ul>
                                    @endif
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
            data: <?php echo json_encode($tree); ?>,
            columns: [{
                    title: '',
                    target: 0,
                    className: 'treegrid-control',
                    data: function(item) {
                        if (item.children) {
                            return '<i class="fas fa-solid fa-plus text-success "></i>';
                        }
                        return '';
                    }
                },

                {
                    title: "id",
                    data: 'id',

                },
                {
                    title: "name",
                    data: 'name',

                },
                {
                    title: "idnumber",
                    data: 'idnumber',

                },
                {
                    title: "description",
                    data: 'description',

                },
                {
                    title: "parent",
                    data: 'parent',

                },
                {
                    title: "depth",
                    data: 'depth',

                },
                {
                    title: "path",
                    data: 'path',

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
