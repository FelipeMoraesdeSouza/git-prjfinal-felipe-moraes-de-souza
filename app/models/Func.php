<?php
namespace app\models;
use app\core\Model;

class Func extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM tblfunc";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada nome de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($func){
        $sql = " INSERT INTO tblfunc set
        nome =:nome,
        cargo =:cargo,
        salario=:salario,
        iddepart=:iddepart        
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $func->nome);
        $qry->bindValue(":cargo", $func->cargo);
        $qry->bindValue(":salario", $func->salario);
        $qry->bindValue(":iddepart", $func->iddepart);
        
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getFunc($id){
        $sql = "SELECT * FROM tblfunc where idfunc = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($func){
        $sql = " UPDATE tblfunc set
        nome =:nome,
        cargo =:cargo,
        iddepart=:iddepart,
        salario=:salario
        
        
        where idfunc = :idfunc
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $func->nome);
        $qry->bindValue(":cargo", $func->cargo);        
        $qry->bindValue(":iddepart", $func->iddepart);
        $qry->bindValue(":salario", $func->salario);
        $qry->bindValue(":idfunc", $func->idfunc);
        $qry->execute();

        return $func->idfunc;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM tblfunc where idfunc = $id";
        $qry = $this->db->query($sql);
    }


    

}