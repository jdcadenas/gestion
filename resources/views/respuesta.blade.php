@extends('adminlte::page')


@section('title', 'Gestión de Cursos')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
@section('plugins.Datatables', true)
{{dd($data)}}
@foreach ($data as $value)
    {{-- <p>{{ $value->username }}</p>
             --}}
@endforeach

<table id="example" class="table table-striped table-bordered" style="width:100%">

</table>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
    $(document).ready(function() {
        $('#example').dataTable({
            data: <?php echo json_encode($data); ?>,
            columns: [{
                    title: "firstname",
                    data: 'firstname',

                },
                {
                    title: "lastname",
                    data: 'lastname',

                },
                {
                    title: "fullname",
                    data: 'fullname',

                },
                {
                    title: "email",
                    data: 'email',

                },
                {
                    title: "suspended",
                    data: 'suspended',

                },
                {
                    title: "confirmed",
                    data: 'confirmed',

                },
                {
                    title: "foto",
                data: 'profileimageurlsmall',
                render: function(data, type, row) {
                    return '<img src="' + data + '" style="max-width: 50px; max-height: 50px;" />';
                }
            },




            ]
        });

    });
</script>
@stop
