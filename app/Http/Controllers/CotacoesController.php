<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CotacaoRepository;

use App\Imports\ImportCotacoes;
use Maatwebsite\Excel\Facades\Excel;

class CotacoesController extends Controller
{
	protected $cotacao;

	public function __construct(CotacaoRepository $cotacao)
	{
		$this->cotacao = $cotacao;
	}

    public function index()
    {
    	$cotacoes = $this->cotacao->index();

    	return view('pages.cotacoes.index', compact('cotacoes'));
    }

    public function importar()
    {
    	return view('pages.cotacoes.importar');
    }

    public function store()
    {
    	Excel::import(new ImportCotacoes, request()->file('file'), \Maatwebsite\Excel\Excel::CSV);

    	return redirect()->route('cotacoes')->with('success', 'Arquivo Importado com sucesso');
    }
}
