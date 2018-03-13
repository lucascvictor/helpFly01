<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
	protected	$email;
    protected   $nome;
    protected   $mensagem;
    protected   $telefone;
    protected   $date;

    public function send(Request $request){
		$this->setEmail($request->email);
		$this->setNome($request->nomeCompleto);
		$this->setNomeEmpresa($request->nomeEmpresa);   
		$this->setCPFeCNPJ($request->nmrDocumento); 
		$this->setTelefone($request->telefone);
		$this->setAssunto($request->assunto);
    	$this->setMensagem($request->textarea1);
    	$this->setDate(date("m-d-Y H:i:s"));

		$assunto = $request->assunto;
		$pagina = $request->pagina;

		$dados = array(
			'titulo' => $oEmail->assunto,
			'mensagem' => $this->getMensagem(), 
			'nome' => $this->getNome(),
			'telefone' => $this->getTelefone(),
			'email' => $this->getEmail(),
			'data' => $this->getDate(),
			);
			
    	Mail::send('emails.send', $dados, function ($message) use ($oEmail)
    	{
    		$message->from($this->getEmail(), $this->getNome());
    		$message->to("sptfly01@gmail.com")->subject("Help Fly");
    	});
         
        return redirect()->back();
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getMensagem(){
		return $this->mensagem;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}


	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}
}
