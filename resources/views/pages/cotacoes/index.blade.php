@extends('layouts.app')

@section('buttons')
    <div class="float-buttons">
        @include('elements.buttons.create', [ 'link' => route('cotacoes_importar') ] )
    </div>
@endsection

@push('scripts')
    <!-- Vendors: Data tables -->
    <script src="{{ asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12"> <!-- general form elements --> <div class="box">
              <!-- box-Body -->               
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Importar Cotações B3</h4>

                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered table-hover table-striped mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Data de Importação</th>
                                        <th>Qtda de Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>16/12/2019</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>17/12/2019</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              <!-- /.box-Body -->
          </div>
        </div>
    </div>
@stop