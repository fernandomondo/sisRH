<?php

class fileBO {
	
	public function __construct(){
	}

   public function __construct($nomeArquivo, $tipoArquivo, $tamanhoArquivo, $nome, $endereco, $telefone, $celular) {
		$this->nomeArquivo = $nomeArquivo;
		$this->tipoArquivo = $tipoArquivo;
		$this->tamanhoArquivo = $tamanhoArquivo;
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
		$this->celular = $celular;
	}

	public function getNomeArquivo() {
		return $this->nomeArquivo;
	}
	
	public function getTipoArquivo() {
		return $this->tipoArquivo;
	}
	
	public function getTamanhoArquivo() {
		return $this->tamanhoArquivo;
	}
	
	public function getName() {
		return $this->nome;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function getCelular() {
		return $this->celular;
	}
}
?>