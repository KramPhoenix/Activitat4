<?php


namespace Rentit\Controllers;


use Rentit\Controller;


class RegisterController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index(){

        $data=['title'=>'HOME'];
        $this->render($data);
    }

    public function register(){
        if(isset($_POST['submit'])) {
            if(!empty($_POST['usuari']) && !empty($_POST['contrasenya'])) {

                $params=[':usuari'=>$_POST['usuari'],
                    ':password'=>$_POST['contrasenya']];

                $sql= 'SELECT usuario FROM usuarios WHERE usuario = "'.$_POST['usuari'].'"';
                $db=$this->getDB();
                $result = $this->query($db , $sql);
                $resultado=$this->row_extract($result);

                if(!empty($resultado)){
                    header('location:/register');
                }else{
                    $sql = 'INSERT INTO usuarios (usuario, contrasenya) VALUES ("'.$_POST['usuari'].'", "'.$_POST['contrasenya'].'")';
                    $db=$this->getDB();
                    $result = $this->query($db , $sql);
                    header('Location:/login');
                }
                }
            }


    }
    public function getSingleResult()
    {
        // TODO: Implement getSingleResult() method.
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
