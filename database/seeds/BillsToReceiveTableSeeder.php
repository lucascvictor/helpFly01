<?php

use Illuminate\Database\Seeder;

class BillsToReceiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills_to_receive')->delete();
        DB::table('bills_to_receive')->insert([
        0=> [
            'id' => 1,
            'status' =>1,
            'number'=>40,
            'description'=>"Aluguel Máquina X",
            'duedate' => '26/04/2018',
            'value' => 2500,
            'bank' => 2,
            'payment_method' => 1
            ],
        1=> [
            'id' => 2,
            'status' =>1,
            'number'=>40,
            'description'=>"SaAluguel Máquina XY",
            'duedate' => '26/04/2018',
            'value' => 5000,
            'bank' => 1,
            'payment_method' => 1
            ],
        2=> [
            'id' => 3,
            'status' =>1,
            'number'=>40,
            'description'=>"Venda AdTech",
            'duedate' => '26/04/2018',
            'value' => 250,
            'bank' => 3,
            'payment_method' => 1
            ],
        3=> [
            'id' => 4,
            'status' =>1,
            'number'=>40,
            'description'=>"Recurso Mensal",
            'duedate' => '26/04/2018',
            'value' => 100,
            'bank' => 1,
            'payment_method' => 1
            ],
        4=> [
            'id' => 5,
            'status' =>1,
            'number'=>40,
            'description'=>"Prestação de Serviço ",
            'duedate' => '26/04/2018',
            'value' => 250,
            'bank' => 1,
            'payment_method' => 1
            ],
        ]);
    }
}
