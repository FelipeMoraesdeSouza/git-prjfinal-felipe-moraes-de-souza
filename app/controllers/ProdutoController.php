<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

class ProdutoController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objProduto = new Produto();
        $dados["lista"] = $objProduto->lista();
        $dados["view"] = "produto/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objProduto = new Produto();
      $dados["produto"] = $objProduto->getProduto($id);
      $dados["view"] = "produto/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "produto/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objProduto = new Produto();
      $produto = new \stdClass();
      $produto->produto           = $_POST["produto"];
      $produto->qtd               = $_POST["qtd"];
      $produto->qtdmax            = $_POST["qtdmax"];
      $produto->qtdmin            = $_POST["qtdmin"];
      $produto->preco             = $_POST["preco"];
      $produto->fornecedor        = $_POST["fornecedor"];
      $produto->idproduto         =($_POST["idproduto"]) ? $_POST["idproduto"] : NULL;
      


      if($produto->idproduto) {

            //cchamar método do obj$objProduto
        $objProduto->editar($produto);
           } else {
        $objProduto->inserir($produto);
      }
     header("location:".URL_BASE."Produto");
         

   }
  
   public function excluir($id){
      $objProduto = new Produto();
      $objProduto->excluir($id);
      header("location:".URL_BASE."Produto");


   }

}