<?php

namespace App\Http\Classes;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


/**
 * Class name OProduc, O references to Object
 */
class OProduct 
{
	/**
  * @author Lucas <lucas.c.victor@hotmail.com>
  * @property $i Utilizado para contagem de loops
  **/
	public $i; 
	protected $data = array();
  public $contador;


	public function __construct()
	{
		/**
    *Inicialização do parametro i
    * @author Lucas <lucas.c.victor@hotmail.com>
    * @property $i
    * A função setI inicializa o parametro i com o valor 0
    * @return void
    **/
		$this->setI(0); 
    }

    public function load($request)
   	{
   		
   		Excel::load($request->file('file'), function($reader)
   			{
   			
   			$reader->each(function($sheet){
   				/**
          * @author Lucas <lucas.c.victor@hotmail.com> 
          *Contagem das planilhas
          * @param $sheet
          */
          $this->setContador(0);

   				$sheet->each(function($row){
   				/**
          * @author Lucas <lucas.c.victor@hotmail.com> 
          *Contagem das linhas das planilhas
          * @param $row
          */
            if($this->getContador() == 0)$column ='2010';
            if($this->getContador() == 1)$column ='2011';
            if($this->getContador() == 2)$column ='2012';
            if($this->getContador() == 3)$column ='2013';
            if($this->getContador() == 4)$column ='2014';
            if($this->getContador() == 5)$column ='2015';
            if($this->getContador() == 6)$column ='2016';
            if($this->getContador() == 7)$column ='2017';
            if($this->getContador() == 8)$column ='cpf';


            if($this->getContador() < 9)$this->setData($row, $this->getI(), $column );


            /** 
            * @author Lucas <lucas.c.victor@hotmail.com> 
            * Adição do contador externo
            * @param $this->getI() @return $this->i
            */
   					$this->setContador($this->getContador() +1); 
   				});
            $this->setI($this->getI() +1); 


   			});
   		});

   	}


   	public function getI()
   	{
   		return $this->i;
   	}

   	public function setI($i)
   	{
   		$this->i = $i;
   	} 

      public function getContador()
    {
      return $this->contador;
    }

    public function setContador($contador)
    {
      $this->contador = $contador;
    } 

   	public function setData($dado, $i, $column)
   	{
   		
   		$this->data[$i][$column] = $dado; 
   		
   	}

   	public function getData($indice, $column) 
   	{
      /** 
      * @author Lucas <lucas.c.victor@hotmail.com>
      * @param $indice Indica o primeiro indice dessa matriz
      * @param $column Indica o segundo indice dessa matriz
      * @return O valor de uma posição da matriz
      */
   		return $this->data[$indice][$column];
   	}


}