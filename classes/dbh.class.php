<?php



class dbh{

    private $host ="localhost";
    private $user ="root";
    private $password ="";
    private $dbname = "product_db";

    // Create connection
    
    
    public function conn(){
        $dns="mysql:host=".$this->host.';dbname='.$this->dbname;
        $pdo=new PDO($dns,$this->user,$this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }



}
    
