<?php

include '../config/conexao.php';
include '../controllers/FilmeController.php';
//include '../views/layouts/header.php';

$controller = new FilmeController($conexao);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'] ?? null;

    switch ($action) {

        case 'adicionar':
            include '../views/filmes/adicionar.php';
            break;

        case 'editar':
            if ($id) {
                // chamar buscar sem atribuir retorno (buscar() pode não retornar valor)
                $controller->buscar($id);
                // garantir variável esperada pela view existe
                $filme = null;
                include '../views/filmes/editar.php';
            }
            break;

        case 'deletar':
            if ($id) {
                $controller->deletar($id);
                header("Location: index.php?mensagem=Filme deletado com sucesso!");
                exit();
            }
            break;

        default:
            $controller->listar();
            $filmes = null;
            include '../views/filmes/index.php';
            break;
    }
} else {
    $controller->listar();
    $filmes = null;
    include '../views/filmes/index.php';
}

//include '../views/layouts/footer.php';

?>