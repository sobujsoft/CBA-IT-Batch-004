<?php
class testClass{
    public $sobuj="Hello, I am Sobuj";
    public $dbHost='localhost';
    public $dbUser='root';
    public $dbPassword='';
    public $dbName='cbait_four';


    function __construct(){
        $this->dbConnection();
    }

    function dbConnection(){
        $conn= mysqli_connect($this->dbHost,$this->dbUser,$this->dbPassword,$this->dbName);
        if ($conn==true){
            return $conn;
        }
        else{
            return false;
        }
    }

    function selectData($selectSQL){
        $runSelectSql=mysqli_query($this->dbConnection(),$selectSQL);
        if ($runSelectSql==true){
            return $runSelectSql;
        }
        else{
            return false;
        }
    }

    function sum(){
        $a=10;
        $b=20;
        $c=$a+$b;
        echo $c;
    }

    function calculate($e,$f){
        $g=$e-$f;
        return $g;
    }

    function sobuj(){
        echo $this->sobuj;
    }

}


?>