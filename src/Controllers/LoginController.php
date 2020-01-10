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
          $params=[':usuario'=>$_POST['usuari'],null
              ':password'=>$_POST['contrasenya']];
          $sql='SELECT * FROM usuarios WHERE usuario="'.$_POST['usuari'].'" AND contrasenya="'.$_POST['contrasenya'].'"' ;
          $db=$this->getDB();
          $result = $this->query($db , $sql);
          $resultado=$this->row_extract($result);

          if(!empty($resultado)){
              session_start();
              $_SESSION['sesiones']=$_POST['usuario'];

              header('location:/buy');
          }
          else{
              header('location:/login');
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