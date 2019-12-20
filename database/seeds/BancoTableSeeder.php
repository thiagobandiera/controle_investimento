<?php

use Illuminate\Database\Seeder;

use App\Models\Banco;

class BancoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banco::create([
        	'nome' => 'Banco Itau'
        ]);

        Banco::create([
        	'nome' => 'Banco Caixa'
        ]);

        Banco::create([
        	'nome' => 'Banco Bradesco'
        ]);

        Banco::create([
        	'nome' => 'Banco Iter'
        ]);

        Banco::create([
        	'nome' => 'Banco Nubank'
        ]);

        Banco::create([
        	'nome' => 'Corretora Rico'
        ]);
    }
}
