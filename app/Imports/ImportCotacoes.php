<?php

namespace App\Imports;

use App\Models\Cotacao;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCotacoes implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cotacao([
            'RptDt'         => implode(preg_match("~\/~", $row['rptdt']) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $row['rptdt']) == 0 ? "-" : "/", $row['rptdt']))),
            'TckrSymb'      => $row['tckrsymb'],
            'ISIN'          => $row['isin'],
            'SgmtNm'        => $row['sgmtnm'],
            'MinPric'       => (double) str_replace(',','.',$row['minpric']),
            'MaxPric'       => (double) str_replace(',','.',$row['maxpric']),
            'TradAvrgPric'  => (double) str_replace(',','.',$row['tradavrgpric']),
            'LastPric'      => (double) str_replace(',','.',$row['lastpric']),
            'AdjstdQt'      => (double) str_replace(',','.',$row['adjstdqt']),
            'RefPric'       => (double) $row['refpric'],
            'TradQty'       => $row['tradqty'],
            'FinInstrmQty'  => $row['fininstrmqty'],
        ]);
    }
}
