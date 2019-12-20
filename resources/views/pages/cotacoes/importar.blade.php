@extends('layouts.app')


@push('scripts')
  <script src="{{ asset('js/crud.js') }}"></script>
  <script type='text/javascript'>
    $(document).ready(function() {

        $("#btn-upload").click(function(){
            $( "#arquivo_input" ).trigger('click')
        })

        $("#form-crud").on("change","input[type='file']",(function(e){
            var fileName = e.target.files[0].name;
            $("#input_name_file").val(fileName);
        }));
    })
  </script>
@endpush

@section('buttons')
    <div class="float-buttons">
        @include('elements.buttons.back', [ 'link' => route('cotacoes') ] )
        @include('elements.buttons.store', [ 'link' => route('cotacoes_store') ] )
    </div>
@endsection

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

                        <form id="form-crud" method="post" action="{{ route( 'cotacoes_store' ) }}" enctype="multipart/form-data" >
                          @csrf
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" id="btn-upload" class="btn btn-info btn--raised ">Arquivo CSV</button>
                                    <input type="text" id="input_name_file" class="form-control" placeholder="Nome Arquivo Selecionado" readonly="">
                                    <input type="file" class="hide" name="file" id="arquivo_input">
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
              </div>

              <!-- /.box-Body -->
          </div>
        </div>
    </div>
@stop