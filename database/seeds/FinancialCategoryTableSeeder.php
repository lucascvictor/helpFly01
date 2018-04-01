<?php

use Illuminate\Database\Seeder;

class FinancialCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financial_category')->delete();
        DB::table('financial_category')->insert([
            0=> [
                "id" =>1,
                "codigo" => '02',
                "descricao" => 'DESPESAS',
                "tipoCarteira" => 2,
                "classe" => 1,
                'categoriaPaiId' => '',
                ],
            1=> [
                "id" =>2,
                "codigo" => '02.01',
                "descricao" => 'PRODUTOS DE LIMPEZA',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '02',
                ],
            2=> [
                "id" =>3,
                "codigo" => '02.02',
                "descricao" => 'MATERIAIS ADMINISTRATIVOS',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '02',
                ],
        ]);
    }

}
