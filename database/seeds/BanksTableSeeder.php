<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->delete();
        DB::table('banks')->insert([
            0=> [
                "id" =>1,
                "bancoNome" => 'ITAU',
                "nomeConta" => 'Unico',
                "agencia" => 1055,
                "digitoAgencia" => 8,
                "conta" => 1025587,
                "digitoConta" => 8,
            ],
            1=> [
                "id" =>2,
                "bancoNome" => 'BRADESCO',
                "nomeConta" => 'Internacional',
                "agencia" => 1055,
                "digitoAgencia" => 8,
                "conta" => 1025587,
                "digitoConta" => 8,
                ],
            2=> [
                "id" =>3,
                "bancoNome" => 'SANTANDER',
                "nomeConta" => 'Nacional',
                "agencia" => 1055,
                "digitoAgencia" => 8,
                "conta" => 1025587,
                "digitoConta" => 8,
                ],
        ]);

    
    }
}
