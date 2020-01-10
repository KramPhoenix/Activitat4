<?php


namespace Rentit\Controllers;


use Rentit\Controller;


class CreateController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }
    public function index(){
        /* $template=['template'=>'opcion'];
         $this->render($template);*/
        $data=['title'=>'HOME'];
        $this->render($data);
    }

    public function create(){
        if(isset($_POST['submit'])) {
            if(!empty($_POST['nom']) && !empty($_POST['imagen']) && !empty($_POST['precio']) && !empty($_POST['descripcion'])) {

                $sql = 'INSERT INTO inmueble_venta (nombre, imagen, descripcion, precio) VALUES ("'.$_POST['nom'].'", "'.$_POST['imagen'].'", "'.$_POST['descripcion'].'", "'.$_POST['precio'].'")';
                $db=$this->getDB();
                $result = $this->query($db , $sql);
                header('Location:/buy');
                }
            }
        else{
            header('Location:/create');
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