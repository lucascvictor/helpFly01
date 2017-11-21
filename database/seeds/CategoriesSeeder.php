<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

         DB::table('categories')->insert([
        	 	0 => [
                    'id'             => 1,
                    'name'           => 'Banheiros',
                    
                ],
                   1 => [
                    'id'             => 2,
                    'name'      => 'Cozinhas e Áreas de Serviço',

                ],
                2 => [
                    'id'             => 3,
                    'name'           => 'Jardim e Lazer',
                    
                ],
                3 => [
                    'id'             => 4,
                    'name'           => 'Organização',
                    
                ],
                4 => [
                    'id'             => 5,
                    'name'           => 'Decoração',
                    
                ],
                5 => [
                    'id'             => 6,
                    'name'           => 'Tapetes',
                    
                ],
                6 => [
                    'id'             => 7,
                    'name'           => 'Iluminação',
                    
                ],
                7 => [
                    'id'             => 8,
                    'name'           => 'Climatização e Ventilação',
                    
                ],
                8 => [
                    'id'             => 9,
                    'name'           => 'Pisos e Revestimentos',
                    
                ],
                9 => [
                    'id'             => 10,
                    'name'           => 'Ferramentas',
                    
                ],
                10 => [
                    'id'             => 11,
                    'name'           => 'Ferragens',
                    
                ],
                11 => [
                    'id'             => 12,
                    'name'           => 'Materiais de Construção',
                    
                ],
                12 => [
                    'id'             => 13,
                    'name'           => 'Materiais Elétricos',
                    
                ],
                13 => [
                    'id'             => 14,
                    'name'           => 'Materiais Hidráulicos',
                    
                ],
                14 => [
                    'id'             => 15,
                    'name'           => 'Marcenaria e Madeiras',
                    
                ],
                15 => [
                    'id'             => 16,
                    'name'           => 'Portas, Janelas e Portões',
                    
                ],
                16 => [
                    'id'             => 17,
                    'name'           => 'Tintas e Acessórios',
                    
                ],
                17 => [
                    'id'             => 18,
                    'name'           => 'Segurança e Comunicação',
                    
                ],
                
                18 => [
                    'id'             => 19,
                    'name'           => 'Limpeza e Manutenção',
                    
                ]
    
         ]);
    }
}
