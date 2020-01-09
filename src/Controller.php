<?php


namespace Rentit;


abstract class Controller implements View,Model
{
    protected $request;
    function __construct($request)
    {
        $this->request=$request;
    }
    function error(){
        throw new \Exception("[ERROR::]:Non existent method");
    }
    function render(array $dataview=null, string $template=null)
    {
        if ($dataview) {
            extract($dataview);
            include 'templates/' . $this->request->getController() . '.tpl.php';
            if ($template != "") {
                include 'templates/' . $template . '.tpl.php';
            }
        }
    }

    function getDB(){
        $db=DB::singleton();
        return $db;
    }

    protected function query ($db,$sql,$params=null){
        try{
            $stmt =$db->prepare($sql);
            if($params){
                $res= $stmt->execute($params);

            }else{
                $res=$stmt->execute();

            }
            return $stmt;
        }catch(\PDOException $e){
            echo $e->getMessage();
        }

    }

    protected function row_extract($stmt){
        $rows=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }

    protected function row_extract_first($stmt){
        $rows=$stmt->fetch(\PDO::FETCH_ASSOC);
        return $rows;
    }


}