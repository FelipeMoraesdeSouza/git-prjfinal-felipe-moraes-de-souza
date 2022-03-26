<?php
namespace app\models;
use app\core\Model;

class Fornec extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblfornecedores";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada Fornec de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($fornec){
        $sql = " INSERT INTO tblfornecedores set        
        fornecedor=:fornecedor,
        cnpj =:cnpj                     
      ";

        $qry=$this->db->prepare($sql);
        
        $qry->bindValue(":fornecedor", $fornec->fornecedor); 
        $qry->bindValue(":cnpj", $fornec->cnpj);
               
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getFornec($id){
        $sql = "SELECT * FROM tblfornecedores where idF = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($fornec){
        $sql = " UPDATE tblfornecedores set        
        cnpj =:cnpj,
        fornecedor=:fornecedor        
        
        where idF = :idF
      ";

        $qry=$this->db->prepare($sql);
        
        $qry->bindValue(":cnpj", $fornec->cnpj);
        $qry->bindValue(":fornecedor", $fornec->fornecedor);        
        $qry->bindValue(":idF", $fornec->idF);
        $qry->execute();

        return $fornec->idF;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblfornecedores where idF = $id";
        $qry = $this->db->query($sql);
    }


    

}