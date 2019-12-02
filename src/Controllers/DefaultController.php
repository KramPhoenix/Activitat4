<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class DefaultController extends Controller {
    public function __construct() {
        echo 'Default';
    }
    public function index() {
        echo 'accion';
    }
}