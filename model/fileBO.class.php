<?php

class fileBO {
	
	private $nomeArquivo;
	private	$tipoArquivo;
	private	$tamanhoArquivo;
	private	$nome;
	private	$endereco;
	private	$telefone;
	private	$celular;
	private	$localArquivo;
	
	public function setAtributes($nomeArquivo, $localArquivo, $tipoArquivo, $tamanhoArquivo, $nome, $endereco, $telefone, $celular) {
		$this->nomeArquivo = $nomeArquivo;
		$this->tipoArquivo = $tipoArquivo;
		$this->tamanhoArquivo = $tamanhoArquivo;
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
		$this->celular = $celular;
		$this->localArquivo = $localArquivo;
	}
	
	public function getNomeArquivo() {
		return $this->nomeArquivo;
	}
	
	public function setNomeArquivo($nomeArquivo){
		$this->nomeArquivo = $nomeArquivo;
	}
	
	public function getTipoArquivo() {
		return $this->tipoArquivo;
	}
	
	public function setTipoArquivo($tipoArquivo){
		$this->tipoArquivo = $tipoArquivo;
	}
	
	public function getTamanhoArquivo() {
		return $this->tamanhoArquivo;
	}
	 
	public function setTamanhoArquivo($tamanhoArquivo){
		$this->tamanhoArquivo = tamanhoArquivo;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function SetNome($nome) {
		return $this->nome = $nome;
	}
		 
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function SetEndereco($endereco) {
		return $this->endereco = $endereco;
	}
	
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function SetTelefone($telefone) {
		return $this->telefone = $telefone;
	}
	
	public function getCelular() {
		return $this->celular;
	}
	
	
	public function SetCelular($celular) {
		return $this->celular = $celular;
	}
	
	public function moverArquivo($novaPasta){		
		return move_uploaded_file($this->localArquivo ,$novaPasta . $this->nomeArquivo );//."/". $this->nome . "-curriculo.txt");		
	}
	
	public function salvar(){
		
	}
	
}
?>