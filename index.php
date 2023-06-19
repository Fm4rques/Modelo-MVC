

<?php

// Verificar a URL e chamar o controlador apropriado com base na solicitação
include_once '../controllers/UsuarioController.php';

if ($_GET['controller'] === 'usuario') {
    $userController = new UsuarioController();
    
    if ($_GET['action'] === 'visualizar') {
        $id = $_GET['id'];
        $userController->visualizar($id);
    }
}


?>
