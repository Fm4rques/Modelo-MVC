
<?php

class Usuario {

    
    private $nome;
    
    public function Usuario($nome){
        $nome = $this.$nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
}
?>

