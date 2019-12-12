<?php


namespace Rentit\Controllers;


use Rentit\Controller;


final class DefaultController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }
    public function index(){
        /* $template=['template'=>'opcion'];
         $this->render($template);*/
        $data=['title'=>'GUAY'];
        $this->render($data);
    }

    /*   public function render($data)
       {

         var_dump($data);
         //var_dump($template);

       }*/

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