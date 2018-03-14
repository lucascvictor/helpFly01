<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
	protected	$email;
	protected   $nomeCompleto;
	protected   $nomeEmpresa;
	protected   $nmrDocumento;
	protected   $telefone;
	protected	$escolhaDuvida;
	protected   $assunto;
    protected   $textarea1;
	protected   $date;
	protected   $caminhoDoArquivo;
	protected   $NomeArquivo;
	protected   $mime;

    public function send(Request $request){
		$this->setEmail($request->email);
		$this->setNome($request->nomeCompleto);
		$this->setNomeEmpresa($request->nomeEmpresa);   
		$this->setCPF_CNPJ($request->nmrDocumento); 
		$this->setTelefone($request->telefone);
		$this->setDuvidaSobre($request->escolhaDuvida);
		$this->setAssunto($request->assunto);
		$this->setMensagem($request->textarea1);
		$this->setCaminhoArquivo($request->arquivos->path());
		$this->setNomeArquivo($request->arquivos);
		$this->setMime($request->arquivos->extension());
		$this->setDate(date("m-d-Y H:i:s"));
		
		$dados = array(
			'email' => $this->getEmail(),
			'nomeCompleto' => $this->getNome(),
			'nomeEmpresa' => $this->getNomeEmpresa(),
			'nmrDocumento' => $this->getCPF_CNPJ(),
			'telefone' => $this->getTelefone(),
			'escolhaDuvida' => $this->getDuvidaSobre(),
			'assunto' => $this->getAssunto(),
			'textarea1' => $this->getMensagem(), 
			'data' => $this->getDate(),
			);
			
    	Mail::send('emails.send', $dados, function ($message)
    	{
    		$message->from($this->getEmail(), $this->getNome());
			$message->to("sptfly01@gmail.com")->subject("Help Fly");
			$message->attach($this->getCaminhoDoArquivo(), ['as' => $this->getNomeArquivo(), 'mime' => $this->getMime()]);
    	});
         
        return redirect()->back();
	}

	public function getNome(){
		return $this->nomeCompleto;
	}

	public function setNome($nomeCompleto){
		$this->nomeCompleto = $nomeCompleto;
	}

	public function getNomeEmpresa(){
		return $this->nomeEmpresa;
	}

	public function setNomeEmpresa($nomeEmpresa){
		$this->nomeEmpresa = $nomeEmpresa;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getCPF_CNPJ(){
		return $this->nmrDocumento;
	}

	public function setCPF_CNPJ($nmrDocumento){
		$this->nmrDocumento = $nmrDocumento;
	}


	public function getAssunto(){
		return $this->assunto;
	}

	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}

	public function getMensagem(){
		return $this->textarea1;
	}

	public function setMensagem($textarea1){
		$this->textarea1 = $textarea1;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getDuvidaSobre(){
		return $this->escolhaDuvida;
	}

	public function setDuvidaSobre($escolhaDuvida){
		$this->escolhaDuvida = $escolhaDuvida;
	}


	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function getCaminhoArquivo(){
		return $this->caminhoArquivo;
	}
	public function setCaminhoArquivo($caminhoArquivo){
		$this->caminhoArquivo = $caminhoArquivo;
	}

	public function getNomeArquivo(){
		return $this->caminhoArquivo;
	}
	public function setNomeArquivo($nomeArquivo){
		$this->nomeArquivo = $nomeArquivo;
	}

	public function getMime(){
		return $this->mime;
	}
	public function setMime($mime){
		$this->mime = $mime;
	}
}
