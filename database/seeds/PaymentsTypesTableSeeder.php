<?php

use Illuminate\Database\Seeder;

class PaymentsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments_methods')->delete();
        DB::table('payments_methods')->insert([
            0=> [
            "id" =>1,
            "description" => 'Dinheiro',
            ],
            1=> [
            "id" =>2,
            "description" => 'Transferência',
            ],
            2=> [
            "id" =>3,
            "description" => 'Cartão',
            ],
        ]);
    }
}
