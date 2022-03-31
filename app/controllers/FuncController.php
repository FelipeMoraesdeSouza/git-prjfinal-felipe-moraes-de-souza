<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Func;

class FuncController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objFunc = new Func();
        $dados["lista"] = $objFunc->lista();
        $dados["view"] = "func/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objFunc = new Func();
      $dados["func"] = $objFunc->getFunc($id);
      $dados["view"] = "func/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "func/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objFunc = new Func();
      $func = new \stdClass();
      $func->nome           = $_POST["nome"];
      $func->cargo          = $_POST["cargo"];
      $func->iddepart       = $_POST["iddepart"];
      $func->salario        = $_POST["salario"];
      $func->idfunc         =($_POST["idfunc"]) ? $_POST["idfunc"] : NULL;
      


      if($func->idfunc) {

            //cchamar método do obj$objFunc
        $objFunc->editar($func);
           } else {
        $objFunc->inserir($func);
      }
     header("location:".URL_BASE."func");
         

   }
  
   public function excluir($id){
      $objFunc = new Func();
      $objFunc->excluir($id);
      header("location:".URL_BASE."func");


   }

}