<?php 


namespace Src\vo;

use  Src\_public\Util;


class ProdutoVO extends CategoriaVO{

    private $id_produto;
    private $nome_produto;
    private $preco;
    private $nome_url;
    private $quantidade;
    private $descricao;
    private $categoria_id;
    private $tipo;
    private $id_pess;

    public function setIdProduto($id_produto){
        $this->id_produto = $id_produto;
    }
    public function getIdProduto(){
        return $this->id_produto;
    }

    public function setNomeProduto($nome_produto){
        $this->nome_produto = $nome_produto;
    }
    public function getNomeProduto(){
        return $this->nome_produto;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }

    
    public function setNomeURL($nome_url){
        $this->nome_url = $nome_url;
    }
    public function getNomeURL(){
        return $this->nome_url;
    }

    public function setIdCategoria($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function getIdCategoria(){
        return $this->categoria_id;
    }

    public function setDescCategoria($descricao){
        $this->descricao = $descricao;
    }
    public function getDescCategoria(){
        return $this->descricao;
    }

    public function setTipoAnexo($t)
    {
        $this->tipo = $t;
    }
    public function getTipoAnexo()
    {
        return $this->tipo;
    }

    public function setIdPessoa($id_pess)
    {
        $this->id_pess = $id_pess;
    }
    public function getIdPessoa()
    {
        return $this->id_pess;
    }

}