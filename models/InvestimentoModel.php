<?php
class InvestimentoModel {
    private $conexao;

    public function __construct($conexao) {
        $this -> conexao = $conexao;
    }

    public function listarInvestimentos(): void {
        //código de listar
    }

    public function buscarInvestimento($id): void {
        //código de busca
    }

    public function inserirInvestimento($nome,$empresa,$valor_investido,$valor_unitario_da_acao): void {
        //código de inserção
    }

    public function atualizarInvestimento($id,$nome,$empresa,$valor_investido,$valor_unitario_da_acao): void {
        //código de atualização
    }

    public function deletarInvestimento($id): void {
        //código de deletar
    }
}