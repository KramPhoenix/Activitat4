<?php


namespace Rentit;


class Request {
    private $controller;
    private $action;
    private $method;
    private $params = array(); //suele ser un array;

    protected $arrURI;

    function __construct() {
        $requestString = htmlentities($_SERVER['REQUEST_URI']);
        $this->arrURI = explode('/', $requestString);
        //EL ARRAY_SHIFT CORRE UNA POSICIÓN, ASÍ ELIMINAMOS EL PRIMER "" DEL ARRAY;
        array_shift($this->arrURI);
        $this->extractURI();
        var_dump($this->getController());
        var_dump($this->getAction());
        var_dump($this->getParams());
        /*if ($this->arrURI[0] == null) {
            //EL FICHERO POR DEFECTO
            echo "No existe el controller indicado";
        }
        else {
            var_dump($this->arrURI);
        }
        */
        die;
    }
    private function extractURI() {
        $length = count($this->arrURI);
        switch ($length) {
            case 1:
                //EL FICHERO POR DEFECTO SI NO SE HA INDICADO NADA
                if ($this->arrURI[0] == null) { $this->setController('default'); }
                else { $this->setController($this->arrURI[0]); }
                $this->setAction('index');
                break;
            case 2:
                if ($this->arrURI[0] == null || $this->arrURI[1] == null) {
                    $this->setController('default');
                    $this->setAction('index');
                }
                else {
                    $this->setController($this->arrURI[0]);
                    $this->setAction($this->arrURI[1]);
                }
                break;
            default:
                $parametroslength = $length - 2;
                $this->setController($this->arrURI[0]);
                $this->setAction($this->arrURI[1]);
                array_shift($this->arrURI);
                array_shift($this->arrURI);
                $parametro = array();
                for ($i = 0; $i < $parametroslength; $i++) {
                    if ($i % 2 == 0) {
                        $parametro += [$this->arrURI[$i] => ''];
                    }
                    else {
                        $nombre = $this->arrURI[$i-1];
                        $parametro[$nombre] = $this->arrURI[$i];
                    }
                }
                $this->setParams($parametro);
                break;
        }
    //$this->>setMethod(htmlentities($_SERVER['REQUEST_METHOD]))
    }

    /*private function Params(){
        if($this->arrURI!=null){
            $arr_length=count($this->arrURI);
            if($arr_length>2){
                array_shift($this->arrURI);
                array_shift($this->arrURI);

                if($arr_length%2==0){
                    for($i=0; $i<$arr_length; $i++){
                        if($i%2==0){
                            $arr_k[]=$this->arrURI[$i];
                        }else{
                            $arr_v[]=$this->arrURI[$i];
                        }
                    }
                    $res=array_combine($arr_k,$arr_v);
                    $this->setParams($res);
                }else{
                    //array asociativo no disponible
                    $this->setParams(null);
                }
            }
        }

    } */
    //Como es un método privado necesitamos funciones públicas para recoger los datos;

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller): void
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

}