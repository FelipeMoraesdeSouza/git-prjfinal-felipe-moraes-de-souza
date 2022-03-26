<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Fornec;

class FornecController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objFornec = new Fornec();
        $dados["lista"] = $objFornec->lista();
        $dados["view"] = "fornec/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objFornec = new Fornec();
      $dados["fornec"] = $objFornec->getFornec($id);
      $dados["view"] = "fornec/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "fornec/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objFornec = new Fornec();
      $fornec = new \stdClass();      
      $fornec->fornecedor = $_POST["fornecedor"];
      $fornec->cnpj       = $_POST["cnpj"];       
      $fornec->idF        =($_POST["idF"]) ? $_POST["idF"] : NULL;

      if($fornec->idF) {

            //cchamar método do obj$objFornec
        $objFornec->editar($fornec);
           } else {
        $objFornec->inserir($fornec);
      }
     header("location:".URL_BASE."fornec");
         

   }
  
   public function excluir($id){
      $objFornec = new Fornec();
      $objFornec->excluir($id);
      header("location:".URL_BASE."fornec");


   }

}