@extends('layouts.app')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12"> <!-- general form elements --> 
      <div class="box">
          <!-- box-Body -->               
            <div class="card">
                <div class="card-body">
                    <form id="form-crud" method="post" action="#" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome do Papel</label>
                                    <input type="text" name="papel" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Local</label>
                                    <input type="text" name="local" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Data Transacao</label>
                                    <input type="text" name="data_transacao" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Cotação</label>
                                    <input type="text" name="cotacao" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Unidades</label>
                                    <input type="text" name="unidades" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Custos Adicionais</label>
                                    <input type="text" name="cotacao" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Carteria</label>
                                    <input type="text" name="unidades" class="form-control">
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
@endsection
