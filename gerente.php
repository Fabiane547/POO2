<?php
class Gerente Extends Funcionario{

function __contrtuct(char $nome, int $cpf){
    $this->nome = $nome;
    $this->cpf = $cpf;
}

    $this->Mostra();
}

abstract public function GeraBonificacao(float $valor): void{

}


}

?>
