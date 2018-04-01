<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->delete();
        DB::table('person')->insert([
            0=> [
                "id" =>1,
                "document" => '	37630811861',
                "name" => 'Allan Rogge',
                "email" => 'a.capinhas@tvglobo.com.br',
                'type' => 1,
                'isSupplier' => 0,
                'isCarrier' => 0,
                'isCustomer' => 1,
                'isSaller' => 0,
                ],
            1=> [
                "id" =>2,
                "document" => '	41633038807',
                "name" => 'Arnaldo Lima',
                "email" => 'a.lima@pinjuriguacu.com.br',
                'type' => 1,
                'isSupplier' => 0,
                'isCarrier' => 0,
                'isCustomer' => 1,
                'isSaller' => 0,
                ],

            2=> [
                "id" =>3,
                "document" => '	502285666855',
                "name" => 'Luciano de Almeida',
                "email" => 'a.luciano@rordkillo.com.br',
                'type' => 1,
                'isSupplier' => 0,
                'isCarrier' => 0,
                'isCustomer' => 1,
                'isSaller' => 0,
                ],
  
        ]);
    }


}
