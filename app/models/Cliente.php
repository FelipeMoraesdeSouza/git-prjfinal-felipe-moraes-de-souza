<?php
namespace app\models;
use app\core\Model;

class Cliente extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblclientes";

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

    public function inserir($cliente){
        $sql = " INSERT INTO tblclientes set
        cliente =:cliente,
        tel =:tel,
        endereco=:endereco,
        email=:email        
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":cliente", $cliente->cliente);
        $qry->bindValue(":tel", $cliente->tel);
        $qry->bindValue(":endereco", $cliente->endereco);
        $qry->bindValue(":email", $cliente->email);
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getCliente($id){
        $sql = "SELECT * FROM tblclientes where idcliente = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($cliente){
        $sql = " UPDATE tblclientes set
        cliente =:cliente,
        tel =:tel,
        endereco=:endereco,
        email=:email
        
        where idcliente = :idcliente
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":cliente", $cliente->cliente);
        $qry->bindValue(":tel", $cliente->tel);
        $qry->bindValue(":endereco", $cliente->endereco);
        $qry->bindValue(":email", $cliente->email);
        $qry->bindValue(":idcliente", $cliente->idcliente);
        $qry->execute();

        return $cliente->idcliente;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblclientes where idcliente = $id";
        $qry = $this->db->query($sql);
    }


    

}