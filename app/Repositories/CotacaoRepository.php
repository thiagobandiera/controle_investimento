<?php

namespace App\Repositories;

use App\Models\Cotacao;

class CotacaoRepository
{

    public function index()
    {
        return Cotacao::groupBy('RptDt')->selectRaw('count(*) as total, RptDt')->get();
    }
}