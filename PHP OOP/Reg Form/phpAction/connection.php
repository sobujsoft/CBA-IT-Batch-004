<?php
class connection{

    public $dbHost='localhost';
    public $dbUser='root';
    public $dbPassword='';
    public $dbName='cbait_batch_four_test';


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

    function runSQLQuery($sql){
        $runSelectSql=mysqli_query($this->dbConnection(),$sql);
        if ($runSelectSql==true){
            return $runSelectSql;
        }
        else{
            return false;
        }
    }





}

?>