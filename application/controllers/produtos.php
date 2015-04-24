<?php

class Produtos extends CI_Controller {
	public function index(){
		$produtos = array();
		$bola = array("nome" => "Bola de futebol", "descricao" => "usada na copa do mundo", "preco" => 300);
		$raquete = array("nome" => "Butterfly", "descricao" => "usada pelo melhor mesatenista", "preco" => 500);
		array_push($produtos, $bola, $raquete);

		$dados = array("produtos" => $produtos);
		$this->load->view("produtos/index.php", $dados);
	}
}