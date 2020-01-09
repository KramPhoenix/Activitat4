<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class UserController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);
    }
    public function  index(){

        $data=[
            'title' => 'User',
            'results' => $this->getResults()
        ];

        $this->render($data);

    }

    public function getSingleResult()
    {
        // TODO: Implement getSingleResult() method.
    }

    public function getResults()
    {
        $db = $this->getDB();
        $stmt = $this->query($db, "SELECT * from inmueble_venta", null);
        $results = $this->row_extract($stmt);
        return $results;
    }
    
    public function json(array $dataview)
    {
        // TODO: Implement json() method.
    }
}