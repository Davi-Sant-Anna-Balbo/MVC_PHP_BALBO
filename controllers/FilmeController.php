<?php

class FilmeController {

    private $filmeModel;

    public function __construct($conexao) {
        $this->filmeModel = new FilmeModel($conexao);
    }

    public function listar() {
        return $this->filmeModel->listarFilmes();
    }

    public function adicionar($nome, $ano, $nota, $genero) {
        return $this->filmeModel->adicionarFilme($nome, $ano, $nota, $genero);
    }

    public function editar($id, $nome, $ano, $nota, $genero) {
        return $this->filmeModel->atualizarFilme($id, $nome, $ano, $nota, $genero);
    }

    public function deletar($id) {
        return $this->filmeModel->deletarFilme($id);
    }

    public function buscar($id) {
        return $this->filmeModel->buscarFilme($id);
    }
}

?>