@extends('layouts.app')

@section('buttons')
    <div class="float-buttons">
        @include('elements.buttons.back', [ 'link' => route('cotacoes') ] )
        @include('elements.buttons.store', [ 'link' => route('cotacoes_store') ] )
    </div>
@endsection

@push('css')
        <link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
@endpush

@push('script')
        <script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box">

              <!-- box-Body -->
              <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Importar Cotações B3</h4>

                        <form class="dropzone" id="dropzone-upload"></form>
                    </div>
              </div>

              <!-- /.box-Body -->
          </div>
        </div>
    </div>
@stop