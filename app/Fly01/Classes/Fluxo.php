<?php
namespace App\Fly01\Classes;

class Fluxo 
{
    public function getPagamentos()
    {
        $i = 0;
        while ($i <= 3) {
            $pag[$i]=rand(-2000, -1000);
            $i++; 
        }
        return $pag;
    }

    public function getRecebimentos()
    {
        $i = 0;
        while($i <= 3) {
             $rec[$i]=rand(2000, 5000);
             $i++; 
        }
        return $rec;
    }

    public function getSaldo($rec, $pag)
    {
        $saldo[-1] = 0;
        $i = 0;
        while($i <= 3) {
            $saldo[$i] = $rec[$i] - $pag[$i];
            $i++; 
        }
        return $saldo;
    }
}