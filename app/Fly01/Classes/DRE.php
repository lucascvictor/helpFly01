<?php
namespace App\Fly01\Classes;

class DRE 
{
    protected $categories;

    public function __construct()
    {
        $categories = array(
            1 => array(
                 "title" => "Receita de prestação de serviços",
                 "type" => 1
            ),
            2 => array(
                "title" => "Manutenção de equipamentos",
                "type" => 2,
                "origin" => 1
            ),

        );
    }

    public function sumAll($itens)
    {
        $total = 0;
        foreach($itens as $item) {
            $total = $item->valor;
        }
        return $total;
    }
}