<?php
namespace app\models;
use app\core\Model;

class Venda extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblvendas";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada cliente de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($venda){
        $sql = " INSERT INTO tblvendas set
        datavenda =:datavenda,
        idproduto =:idproduto,
        idcliente =:idcliente,
        idfunc =:idfunc,
        qtd =:qtd,
        precototal =:precototal
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":datavenda",  $venda->datavenda);
        $qry->bindValue(":idproduto",  $venda->idproduto);
        $qry->bindValue(":idcliente",  $venda->idcliente);
        $qry->bindValue(":idfunc",     $venda->idfunc);
        $qry->bindValue(":qtd",        $venda->qtd);
        $qry->bindValue(":precototal", $venda->precototal);
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getVenda($id){
        $sql = "SELECT * FROM tblvendas where idvenda = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($venda){
        $sql = " UPDATE tblvendas set
        datavenda  =:datavenda,
        idproduto  =:idproduto,
        idcliente  =:idcliente,
        idfunc     =:idfunc,
        qtd        =:qtd,
        precototal =:precototal
        
        
        where idvenda = :idvenda
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":datavenda",   $venda->datavenda);
        $qry->bindValue(":idproduto",   $venda->idproduto);
        $qry->bindValue(":idcliente",   $venda->idcliente);
        $qry->bindValue(":idfunc",      $venda->idfunc);
        $qry->bindValue(":qtd",         $venda->qtd);
        $qry->bindValue(":precototal",  $venda->precototal);
        $qry->bindValue(":idvenda",     $venda->idvenda);
        
        $qry->execute();

        return $venda->idvenda;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblvendas where idvenda = $id";
        $qry = $this->db->query($sql);
    }


    

}