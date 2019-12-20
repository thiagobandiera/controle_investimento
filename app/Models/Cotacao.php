<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
	protected $table = 'cotacoes';

    protected $fillable = ['RptDt','TckrSymb','ISIN','SgmtNm','MinPric','MaxPric','TradAvrgPric','LastPric','AdjstdQt','RefPric','TradQty','FinInstrmQty'];
}
