<?php

class FilmeModel {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function listarFilmes() {
        $sql = "SELECT * FROM filmes";
        return $result = $this->conexao->query($sql);

        //código de listar
    }

    public function buscarFilme($id) {
        $sql = "SELECT * FROM filmes WHERE id = $id";
        $result = $this->conexao->query($sql);
        if ($result->num_rows > 0) {
            return $filme = $result->fetch_assoc();
        }
        //código de buscar
    }

    public function adicionarFilme($nome, $ano, $nota, $genero) {
        $sql = "INSERT INTO filmes (nome, ano, nota, genero) VALUES (?, ?, ?, ?)";

        if ($stmt = $this->conexao->prepare($sql)) {
            $stmt->bind_param("sifs", $nome, $ano, $nota, $genero);
            $stmt->execute();
            $stmt->close();
            return true;
        }
    return false;
    //código de inserção
    }

    public function atualizarFilme($id, $nome, $ano, $nota, $genero) {
        $sql = "UPDATE filmes SET nome = ?, ano = ?, nota = ?, genero = ? WHERE id = ?";
        if ($stmt = $this->conexao->prepare($sql)) {
            $stmt->bind_param("siisi", $nome, $ano, $nota, $genero, $id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        return false;
    }

    public function deletarFilme($id) {
        //código de deletar
    }
}

?>