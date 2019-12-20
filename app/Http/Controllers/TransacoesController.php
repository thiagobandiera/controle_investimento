<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransacoesController extends Controller
{
    public function comprar()
    {
    	return view('pages.transacoes.comprar');
    }

    public function comprarRendaVariavel()
    {
    	return view('pages.transacoes.comprar_renda_variavel');
    }
}
