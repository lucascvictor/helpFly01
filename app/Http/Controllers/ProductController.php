<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;
use App\Http\Classes\OProduct;
use Session;
use DB;

class ProductController extends Controller
{
	
    public function storeUsers(Request $request)
    {
      $products = new OProduct;

      /**
      * Descrição da utilização das variáveis $a, $e e $d
      * @author Lucas <lucas.c.victor@hotmail.com>
      * @var int $a Armazena a quantidade de itens adicionados
      * @var int $d Armazena a quantidade de itens com categorys inexistentes
      *@var int $e Armazena a quantidade de itens existentes
      **/
      
      $column1 = '2010';
      $column2 = '2011';
      $column3 = '2012';
      $column4 = '2013';
      $column5 = '2014';
      $column6 = '2015'; 
      $column7 = '2016'; 
      $column8 = '2017'; 
      $column8 = 'cpf'; 
  
      /**
      * Função da variável $data
      * @author Lucas <lucas.c.victor@hotmail.com>
      * @var date $data Armazenar a data e horário atuais para que posteriormente possa ser utilizado nas propriedade created_at e updated_at ao salvar o product no banco de data
      **/
      $data = date("Y-m-d H:i:s"); 

      $products->load($request);

      $i = $products->getI() - 1;

      $contador = 0;
      $seeder = fopen("/var/www/html/apemesp/Anuidades.txt", "w+");

      // Escreve "primeiro exemplo" no exemplo1.txt
      $escreve = fwrite($seeder, "DB::table('anuidades')->insert([ \n");
      
      
      while($i >= 0 ){

        $product = new Product;
       
       $cpf = $this->limpaCPF($products->getData($i, $column8));
       $id_user = DB::table('dados_pessoais')->where('cpf', $cpf)->select('id')->get();

        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2010 . ",\n");

          if ($products->getData($i, $column1) == 'pg') {
            $status = 3;
          } 
          if ($products->getData($i, $column1) == 'isento') {
            $status = 2;
          }

          if ($products->getData($i, $column1) == 'pend') {
            $status = 1;
          }

          if ($products->getData($i, $column1) == 'x') {
            $status = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");

          $contador++;
        }

         


        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2011 .",\n");

          if ($products->getData($i, $column2) == 'pg') {
            $status2 = 3;
          } 
          if ($products->getData($i, $column2) == 'isento') {
            $status2 = 2;
          }

          if ($products->getData($i, $column2) == 'pend') {
            $status2 = 1;
          }

          if ($products->getData($i, $column2) == 'x') {
            $status2 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status2 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }


        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2012 .",\n");

          if ($products->getData($i, $column3) == 'pg') {
            $status3 = 3;
          } 
          if ($products->getData($i, $column3) == 'isento') {
            $status3 = 2;
          }

          if ($products->getData($i, $column3) == 'pend') {
            $status3 = 1;
          }

          if ($products->getData($i, $column3) == 'x') {
            $status3 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status3 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }


        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");


          $escreve = fwrite($seeder, "\"ano\" => ". 2013 .",\n");

          if ($products->getData($i, $column4) == 'pg') {
            $status4 = 3;
          } 
          if ($products->getData($i, $column4) == 'isento') {
            $status4 = 2;
          }

          if ($products->getData($i, $column4) == 'pend') {
            $status4 = 1;
          }

          if ($products->getData($i, $column4) == 'x') {
            $status4 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status4 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }

        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2014 .",\n");

          if ($products->getData($i, $column5) == 'pg') {
            $status5 = 3;
          } 
          if ($products->getData($i, $column5) == 'isento') {
            $status5 = 2;
          }

          if ($products->getData($i, $column5) == 'pend') {
            $status5 = 1;
          }

          if ($products->getData($i, $column5) == 'x') {
            $status5 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status5 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }

        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2015 .",\n");

          if ($products->getData($i, $column6) == 'pg') {
            $status6 = 3;
          } 
          if ($products->getData($i, $column6) == 'isento') {
            $status6 = 2;
          }

          if ($products->getData($i, $column6) == 'pend') {
            $status6 = 1;
          }

          if ($products->getData($i, $column6) == 'x') {
            $status6 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status6 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }


        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2016 .",\n");

          if ($products->getData($i, $column7) == 'pg') {
            $status7 = 3;
          } 
          if ($products->getData($i, $column7) == 'isento') {
            $status7 = 2;
          }

          if ($products->getData($i, $column7) == 'pend') {
            $status7 = 1;
          }

          if ($products->getData($i, $column7) == 'x') {
            $status7 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status7 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }

        if ($products->getData($i, $column3) != null && $products->getData($i, $column1) != null && $products->getData($i, $column2) != null && $products->getData($i, $column5) != null && count($id_user) != 0) {


          $escreve = fwrite($seeder, $contador."=> [ \n \"id\" =>".($contador+1).", \n");

          $escreve = fwrite($seeder, "\"id_user\" => " .  "\"" . $id_user . "\"" .",\n");

          $escreve = fwrite($seeder, "\"arq_enviado\" => ". "\"" . 0 . "\"".",\n");

          $escreve = fwrite($seeder, "\"ano\" => ". 2017 .",\n");

          $status8 = 9;

          if ($products->getData($i, $column8) == 'pg') {
            $status8 = 3;
          } 
          if ($products->getData($i, $column8) == 'isento') {
            $status8 = 2;
          }

          if ($products->getData($i, $column8) == 'pend') {
            $status8 = 1;
          }

          if ($products->getData($i, $column8) == 'x') {
            $status8 = 8;
          }


          $escreve = fwrite($seeder, "\"arq_avaliado\" => ". "\"" . $status8 . "\"".",\n");

          $escreve = fwrite($seeder, "], \n");
            
          $contador++;
        }

        $i = $i -1;

        unset($product);        
      }
      $escreve = fwrite($seeder, "]);");
      // Fecha o arquivo
      fclose($seeder);

      return "***feito!***";
    }

    public function limpaCPF($valor){
       $valor = trim($valor);
       $valor = str_replace(".", "", $valor);
       $valor = str_replace(",", "", $valor);
       $valor = str_replace("-", "", $valor);
       $valor = str_replace("/", "", $valor);
       return $valor;
    }

    public function store(Request $request)
    {

      $products = new OProduct;

      /**
      * Descrição da utilização das variáveis $a, $e e $d
      * @author Lucas <lucas.c.victor@hotmail.com>
      * @var int $a Armazena a quantidade de itens adicionados
      * @var int $d Armazena a quantidade de itens com categorys inexistentes
      *@var int $e Armazena a quantidade de itens existentes
      **/
      
   		$column1 = 'nome';
    	$column2 = 'nascimento';
    	$column3 = 'cpf';
    	$column4 = 'rg';
    	$column5 = 'email';
    	$column6 = 'endereco'; 

      /**
      * Função da variável $data
      * @author Lucas <lucas.c.victor@hotmail.com>
      * @var date $data Armazenar a data e horário atuais para que posteriormente possa ser utilizado nas propriedade created_at e updated_at ao salvar o product no banco de data
      **/
    	$data = date("Y-m-d H:i:s"); 

    	$products->load($request);

    	$i = $products->getI() - 1;

      $contador = -10;
      $seeder = fopen("/var/www/html/apemesp/dadosAcademicos.txt", "w+");

      // Escreve "primeiro exemplo" no exemplo1.txt
      $escreve = fwrite($seeder, "DB::table('categories')->insert([ \n");
      
      
    	while($i >= 0 ){
    		$product = new Product;
    		$escreve = fwrite($seeder, $contador."=> [ \n 'id' =>".($contador+1).", \n");
        $escreve = fwrite($seeder, "\"id_user\" => ". ($contador+1)  .", \n");
    		$escreve = fwrite($seeder, "\"name\" => ". "\"" .$products->getData($i, $column1). "\"".",\n");
    		$escreve = fwrite($seeder, "\"nascimento\" => \"". substr($products->getData($i, $column2), 0, 10)."\",\n");
    		$escreve = fwrite($seeder, "\"cpf\" => ". $products->getData($i, $column3).",\n");
    		$escreve = fwrite($seeder, "\"rg\" => " .  "\"" .$products->getData($i, $column4). "\"" .",\n");
        $escreve = fwrite($seeder, "\"endereco\" => " .  "\"" .$products->getData($i, $column6). "\"".",\n");

        $escreve = fwrite($seeder, "], \n");
      		
    		$contador++;
        $i = $i -1;
    		unset($product);    		
    	}
      $escreve = fwrite($seeder, "]);");
      // Fecha o arquivo
      fclose($seeder);

      return "***feito!***";
   	}


    public function edit($lm)
    {
      $product = Product::select('*')->where('lm', '=', $lm)->get();
      $categories = Category::all();
      
      return view('edit')->with('product', $product)->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {

            $this->validate($request, array(
                    'name' => 'required|max:255',
                    'price' => 'required',
                    'description' => 'required',
                ));

            $data = date("Y-m-d H:i:s");
            Product::where('id', $id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'free_shipping' => (bool)$request->free_shipping,
                'updated_at' => $data
                ]);

            
           Session::flash('success', 'Product was updated successfully');
           return redirect()->route('see');
    }

    public function delete($id)
    {

      $product = Product::find($id);
      $product->delete();
       Session::flash('success', 'The product has been deleted successfully.');
        return redirect()->route('see');
    }
}
