<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Venda;

class VendaController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objVenda = new Venda();
        $dados["lista"] = $objVenda->lista();
        $dados["view"] = "venda/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objVenda = new Venda();
      $dados["venda"] = $objVenda->getVenda($id);
      $dados["view"] = "venda/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "venda/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objVenda = new Venda();
      $venda = new \stdClass();
      $venda->datavenda       = $_POST["datavenda"];
      $venda->idproduto       = $_POST["idproduto"];
      $venda->idcliente       = $_POST["idcliente"];
      $venda->idfunc          = $_POST["idfunc"];
      $venda->qtd             = $_POST["qtd"];
      $venda->precototal      = $_POST["precototal"];
      $venda->idvenda         = ($_POST["idvenda"]) ? $_POST["idvenda"] : NULL;
      


      if($venda->idvenda) {

            //cchamar método do obj$objVenda
        $objVenda->editar($venda);
           } else {
        $objVenda->inserir($venda);
      }
     header("location:".URL_BASE."venda");
         

   }
  
   public function excluir($id){
      $objVenda = new Venda();
      $objVenda->excluir($id);
      header("location:".URL_BASE."venda");


   }

}