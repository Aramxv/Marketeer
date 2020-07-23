<?php

class DBController
{
    // Database Connection Properties
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database="marketeer";

    // Connection Property
    public $connect=null;

    // Call Constructor
    public function __construct()
    {
        $this->connect= mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->connect->connect_error){
            echo "Fail" .$this->connect_error;
        }
    }

    // It is best practice to close 
    // the connection when not in use
    public function __destruct()
    {
        $this->closeConnection();
    }

    // Closing Database Connection 
    // When object is not in use
    protected function closeConnection(){
        if($this->connect!=null){
            $this->connect->close();
            $this->connect=null;
        }
    }

}



?>