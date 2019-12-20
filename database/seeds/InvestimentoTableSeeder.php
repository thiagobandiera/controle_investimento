<?php

use Illuminate\Database\Seeder;

use App\Models\Investimento;

class InvestimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Renda Variavel
        Investimento::create([
        	'nome' => 'Fundo Imobiliario',
        	'tipo_investimento' => 'Renda Variavel'
        ]);

        //Renda Fixa
        Investimento::create([
        	'nome' => 'CDB',
        	'tipo_investimento' => 'Renda Fixa'
        ]);

        Investimento::create([
        	'nome' => 'LCI',
        	'tipo_investimento' => 'Renda Fixa'
        ]);

        Investimento::create([
        	'nome' => 'LC',
        	'tipo_investimento' => 'Renda Fixa'
        ]);

        Investimento::create([
        	'nome' => 'LCA',
        	'tipo_investimento' => 'Renda Fixa'
        ]);

        Investimento::create([
        	'nome' => 'Tesouro Direto',
        	'tipo_investimento' => 'Renda Fixa'
        ]);

        //Reserva
        Investimento::create([
        	'nome' => 'Poupança',
        	'tipo_investimento' => 'Reserva'
        ]);

        Investimento::create([
        	'nome' => 'CDB Nubank',
        	'tipo_investimento' => 'Reserva'
        ]);

        Investimento::create([
        	'nome' => 'CDB Inter',
        	'tipo_investimento' => 'Reserva'
        ]);

        Investimento::create([
        	'nome' => 'Dinheiro',
        	'tipo_investimento' => 'Reserva'
        ]);
    }
}
