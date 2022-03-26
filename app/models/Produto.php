<?php
namespace app\models;
use app\core\Model;

class Produto extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblestoque";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada produto de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($produto){
        $sql = " INSERT INTO tblestoque set
        produto = :produto,
        qtd = :qtd,
        qtdmax = :qtdmax,
        qtdmin = :qtdmin,
        preco = :preco,
        fornecedor = :fornecedor
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":produto", $produto->produto);
        $qry->bindValue(":qtd", $produto->qtd);
        $qry->bindValue(":qtdmax", $produto->qtdmax);
        $qry->bindValue(":qtdmin", $produto->qtdmin);
        $qry->bindValue(":preco", $produto->preco);
        $qry->bindValue(":fornecedor", $produto->fornecedor);
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getProduto($id){
        $sql = "SELECT * FROM tblestoque where idproduto = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($produto){
        $sql = " UPDATE tblestoque set
        produto = :produto,
        qtd = :qtd,
        qtdmax = :qtdmax,
        qtdmin = :qtdmin,
        preco = :preco,
        fornecedor = :fornecedor
        
        where idproduto = :idproduto
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":produto", $produto->produto);
        $qry->bindValue(":qtd", $produto->qtd);
        $qry->bindValue(":qtdmax", $produto->qtdmax);
        $qry->bindValue(":qtdmin", $produto->qtdmin);
        $qry->bindValue(":preco", $produto->preco);
        $qry->bindValue(":fornecedor", $produto->fornecedor);
        $qry->bindValue(":idproduto", $produto->idproduto);
        $qry->execute();

        return $produto->idproduto;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblestoque where idproduto = $id";
        $qry = $this->db->query($sql);
    }


    

}