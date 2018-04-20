<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->delete();
        DB::table('status')->insert([
            0=> [
            'id' => 1,
            'description' => 'Pago',
            ],
            1=> [
            'id' => 2,
            'description' => 'Em aberto',
            ],
            2=> [
            'id' => 3,
            'description' => 'Renegociado',
            ],
            
        ]);
    }
}
