@extends('admin.includes_admin.index')
@section('Control','active')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! $dataTable->table(['class' => 'table table-bordered table-hover','style' => 'width:100%'],true) !!}
                </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    {{--  <div id="app">
        <example-component></example-component>
    </div>  --}}
@endsection

@push('scripts')
{{--  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/datatables.net-bs/css/buttons.dataTables.min.css">  --}}
{{--  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">  --}}
{{--  <script src="{{url('/')}}/adminlte/bower_components/datatables.net/js/dataTables.buttons.min.js"></script>  --}}
{{--  <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>  --}}
{{--  <script src="{{url('/')}}/vendor/datatables/buttons.server-side.js"></script>  --}}
{!! $dataTable->scripts() !!}
@endpush