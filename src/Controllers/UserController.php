<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class UserController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);
        var_dump($this->request->getParams());
        die;
        echo __CLASS__;
    }
    public function  index(){

        $template=$this->request->getParams();
        $data=$this->request->getParams();
        $this->render([]);

    }

    public function render($dataview=null)
    {
        var_dump($dataview);

    }
}