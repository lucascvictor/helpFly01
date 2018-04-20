<?php

use Illuminate\Database\Seeder;

class BillsToPayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills_to_pay')->delete();
        DB::table('bills_to_pay')->insert([
            0=> [
                'id' => 1,
                'status' =>1,
                'number'=>40,
                'description'=>"Aluguel Estabelecimento",
                'duedate' => '26/04/2018',
                'value' => 2000,
                'bank' => 2,
                'payment_method' => 1
                ],
            1=> [
                'id' => 2,
                'status' =>1,
                'number'=>40,
                'description'=>"Salário Colaboradores",
                'duedate' => '26/04/2018',
                'value' => 3000,
                'bank' => 1,
                'payment_method' => 1
                ],
            2=> [
                'id' => 3,
                'status' =>1,
                'number'=>40,
                'description'=>"Compra de materiais de Limpeza",
                'duedate' => '26/04/2018',
                'value' => 90,
                'bank' => 3,
                'payment_method' => 1
                ],
            3=> [
                'id' => 4,
                'status' =>1,
                'number'=>40,
                'description'=>"Recurso Mensal",
                'duedate' => '26/04/2018',
                'value' => 50,
                'bank' => 1,
                'payment_method' => 1
                ],
            4=> [
                'id' => 5,
                'status' =>1,
                'number'=>40,
                'description'=>"Materiais de Escritório",
                'duedate' => '26/04/2018',
                'value' => 50,
                'bank' => 1,
                'payment_method' => 1
                ],
            
        ]);
    }
}
