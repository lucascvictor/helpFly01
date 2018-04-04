<?php
namespace App\Fly01\Classes;

class DRE 
{
    protected $categories;
    
    public function __construct()
    {

    }

    public function sumAll($itens)
    {
        $total = 0;
        foreach($itens as $item) {
            $total = $total = $item->valor;
        }
        return $total;
    }
}