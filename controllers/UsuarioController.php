<?php

include '../models/Usuario.php';

class UsuarioController {
    public function visualizar($id) {
        // Obter o usuário do modelo
        $usuario = $this->obterUsuarioPorId($id);
        
        // Carregar a visualização
        include '../views/usuario_view.php';
    }
    
    private function obterUsuarioPorId($id) {
        // Lógica para obter o usuário do banco de dados ou outra fonte de dados
        
        // Retornar uma instância do modelo de usuário preenchida com os dados
        $usuario = new Usuario('João');
        
        return $usuario;
    }
}

?>
