<?php
class database {
    public $serverName = "localhost"; //host
    public $username = "root";
    public $password = "";
    public $dbName = "nti_ecommerce";
    public $con;
    function __construct()
    {
        $this->con = new mysqli($this->serverName,$this->username,$this->password,$this->dbName);
        if($this->con->connect_error){
            die("connection failed: ". $this->con->connect_error);
        }else{
            //echo("DB is connected");
        }
    }

    public function runDML($query)
    {
        $result = $this->con->query($query);
        if($result === TRUE){
            return TRUE;
        }else{
            return FALSE;
            // echo "Error: ".$this->con->connect_error;
        }
    }

    public function runDQL($query)
    {
        $result = $this->con->query($query);
        if($result->num_rows > 0){
            return $result;
        }else {
           return [];
        }
    }
}
?>