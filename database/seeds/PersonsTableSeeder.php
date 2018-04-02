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
            //clientes
            0=> [
                "id" =>1,
                "document" => '	37630811888',
                "name" => 'Lucas Victor',
                "email" => 'a.capinhas@tvglobo.com.br',
                'adress' => 'Rua dos clientes, 2111',
                'neighborhood' => 'Vila dos clientes',
                'city' => 'São Paulo',
                'state' => 'SP',
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
                'adress' => 'Rua dos clientes, 2111',
                'neighborhood' => 'Vila dos clientes',
                'city' => 'São Paulo',
                'state' => 'SP',
                'type' => 1,
                'isSupplier' => 0,
                'isCarrier' => 0,
                'isCustomer' => 1,
                'isSaller' => 0,
                ],

            2=> [
                "id" =>3,
                "document" => '	502285666815',
                "name" => 'Luciano de Almeida',
                "email" => 'a.luciano@rordkillo.com.br',
                'adress' => 'Rua dos clientes, 2111',
                'neighborhood' => 'Vila dos clientes',
                'city' => 'São Paulo',
                'state' => 'SP',
                'type' => 1,
                'isSupplier' => 0,
                'isCarrier' => 0,
                'isCustomer' => 1,
                'isSaller' => 0,
                ],

            //fornecedores
            3=> [
                "id" =>4,
                "document" => '	37630811861058',
                "name" => 'Fornecedor 1',
                "email" => 'a1.fornecedor@fornecedor.com.br',
                'type' => 1,
                'adress' => 'Rua dos fornecedores, 2119',
                'neighborhood' => 'Vila dos fornecedores',
                'city' => 'São Paulo',
                'state' => 'SP',
                'isSupplier' => 1,
                'isCarrier' => 0,
                'isCustomer' => 0,
                'isSaller' => 0,
                ],

            4=> [
                "id" =>5,
                "document" => '	37630811861022',
                "name" => 'Fornecedor 2',
                "email" => 'a2.fornecedor@fornecedor.com.br',
                'type' => 1,
                'adress' => 'Rua dos fornecedores, 2111',
                'neighborhood' => 'Vila dos fornecedores',
                'city' => 'São Paulo',
                'state' => 'SP',
                'isSupplier' => 1,
                'isCarrier' => 0,
                'isCustomer' => 0,
                'isSaller' => 0,
                ],
            5=> [
                "id" =>6,
                "document" => '	37630811861588',
                "name" => 'Fornecedor 3',
                "email" => 'a3.fornecedor@fornecedor.com.br',
                'type' => 1,
                'adress' => 'Rua dos fornecedores, 2110',
                'neighborhood' => 'Vila dos fornecedores',
                'city' => 'São Paulo',
                'state' => 'SP',
                'isSupplier' => 1,
                'isCarrier' => 0,
                'isCustomer' => 0,
                'isSaller' => 0,
                ],
        ]);
    }


}
