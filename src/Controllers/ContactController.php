<?php


namespace Rentit\Controllers;


use Rentit\Controller;


class ContactController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }
    public function index(){
        $data=['title'=>'CONTACTO'];
        $this->render($data);
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