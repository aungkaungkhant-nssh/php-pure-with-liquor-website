<?php
class Connection{
    protected $dbname,$dbhost,$dbuser,$dbpass;
    public function __construct(
        $dbname="liquor",
        $dbhost="localhost",
        $dbuser="admin",
        $dbpass="123456"
    )
    {
       $this->dbname=$dbname;
       $this->dbhost=$dbhost;
       $this->dbuser=$dbuser;
       $this->dbpass=$dbpass; 
    }
    public function connect(){
        try{
          return  $pdo=new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",
            $this->dbuser,
            $this->dbpass,
            [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]
            );
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}