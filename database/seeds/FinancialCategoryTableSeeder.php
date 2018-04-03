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
            3=> [
                "id" =>4,
                "codigo" => '03',
                "descricao" => 'VENDAS',
                "tipoCarteira" => 2,
                "classe" => 1,
                'categoriaPaiId' => '',
                ],
            4=> [
                "id" =>5,
                "codigo" => '03.01',
                "descricao" => 'VENDAS ELETRONICOS',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '03',
                ],
            5=> [
                "id" =>6,
                "codigo" => '03.02',
                "descricao" => 'VENDAS PERIFERICOS',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '03',
                ],
            6=> [
                "id" =>7,
                "codigo" => '04',
                "descricao" => 'VENDAS',
                "tipoCarteira" => 2,
                "classe" => 1,
                'categoriaPaiId' => '',
                ],
            7=> [
                "id" =>8,
                "codigo" => '04.01',
                "descricao" => 'RECEITA DE COMISSÕES',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '03',
                ],
            8=> [
                "id" =>9,
                "codigo" => '04.02',
                "descricao" => 'CATEGORIA EXEMPLO',
                "tipoCarteira" => 2,
                "classe" => 2,
                'categoriaPaiId' => '03',
                ],


        ]);
    }

}
