<?php


namespace Rentit\Controllers;


use Rentit\Controller;


class LoginController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }
    public function index(){
        $data=['title'=>'GUAY'];
        $this->render($data);
    }

  public function login(){
      if(isset($_POST)){
          $params=[':usuario'=>$_POST['usuari'],
              ':password'=>$_POST['contrasenya']];
          $sql='SELECT * FROM "usuarios" WHERE usuario=:usuario AND contrasenya=:password ;';
          $result=$this->getSingleResult($sql,$params);
          if(is_array($result)){
              session_start();
              $_SESSION['sesiones']=$_POST['usuario'];

              header('location:/user');
          }
          else{
              header('location:/home');
          }
      }
  }

    public function getSingleResult()
    {
        $db=$this->getDB();
        $stmt=$this->query($db ,"SELECT * FROM usuarios" , null );
        $result=$this->row_extract_first($stmt);
        return $result;
    }

    public function getResults()
    {
        // TODO: Implement getResults() method.
    }

    public function json(array $dataview)
    {
        // TODO: Implement json() method.
    }
}