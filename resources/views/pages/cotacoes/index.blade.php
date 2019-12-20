@extends('layouts.app')

@section('buttons')
    <div class="float-buttons">
        @include('elements.buttons.create', [ 'link' => route('cotacoes_importar') ] )
    </div>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12"> <!-- general form elements --> 
          <div class="box">
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
                                    @foreach ( $cotacoes as $cotacao )
                                      <tr>
                                          <td>{{ date("d/m/Y", strtotime($cotacao->RptDt)) }}</td>
                                          <td>{{ $cotacao->total }}</td>
                                      </tr>
                                    @endforeach
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