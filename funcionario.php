<?php
	abstract class Funcionario {
		protected $nome, $cpf;

		function __contrtuct(char $nome, int $cpf){
			$this->nome 	= $nome;
			$this->cpf 		= $cpf;
		}

		public function Mostra(): void{
			echo "Nome: {$this->nome} ";
			echo "Cpf: {$this->cpf} \n";

		}

		abstract public function GeraBonificacao(float $valor): void{

		}

	}