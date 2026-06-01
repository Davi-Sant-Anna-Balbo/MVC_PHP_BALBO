<?php

class FilmeModel {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function listarFilmes() {
        //código de listar
    }

    public function buscarFilme($id) {
        //código de busca
    }

    public function adicionarFilme($nome, $ano, $nota, $genero) {
        //código de inserção
    }

    public function atualizarFilme($id, $nome, $ano, $nota, $genero) {
        //código de atualização
    }

    public function deletarFilme($id) {
        //código de deletar
    }
}

?>