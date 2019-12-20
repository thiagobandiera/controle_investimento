@extends('layouts.app')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12"> <!-- general form elements --> 
      <div class="box">
          <!-- box-Body -->               
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Escolher tipo de investimento</h4>

                    <div class="row price-table price-table--basic">
                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-light-blue">
                                    <div class="price-table__title">Renda Variavel</div>
                                    <div class="price-table__desc">Ações / Fundo Imobiliarios</div>
                                </header>
                                <a href="{{ route('transacao_comprar_renda_variavel') }}" class="price-table__action bg-light-blue">SELECIONE</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-red">
                                    <div class="price-table__title">Renda Fixa</div>
                                    <div class="price-table__desc">CDB, LCI, LCA, Tessouro Direto</div>
                                </header>
                                <a href="" class="price-table__action bg-red">SELECIONE</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="price-table__item">
                                <header class="price-table__header bg-purple">
                                    <div class="price-table__title">Reserva</div>
                                    <div class="price-table__desc">Poupança, Dinheiro</div>
                                </header>
                                <a href="" class="price-table__action bg-purple">SELECIONE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- /.box-Body -->
      </div>
    </div>
</div>
@endsection
