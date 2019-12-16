<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotacoesController extends Controller
{
    public function index()
    {
    	return view('pages.cotacoes.index');
    }

    public function importar()
    {
    	return view('pages.cotacoes.importar');
    }

    public function store()
    {
    	dd('teste');
    }
}
