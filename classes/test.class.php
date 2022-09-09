<?php

class test extends dbh{

    public function getusers(){
        $sql="SELECT * FROM product";
        $stmt=$this->conn()->query($sql);
        while($row=$stmt->fetchall()){
            echo '<pre>';
            print_r($row);
        }
    }

    public function getuser($id){
        $sql="SELECT * FROM product WHERE id=? ";
        $stmt=$this->conn()->prepare($sql);
        $stmt->execute([$id]);
        $name=$stmt->fetchAll();
        echo '<pre>';
        print_r($name);
    }

    public function  setuser($name,$size){
        $sql="INSERT INTO product(name,size)VALUES(:name,:size)";
        $stmt=$this->conn()->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindparam(":size",$size);
        $stmt->execute();
        echo '<br>new recode add<br>';

    }
    public function deluser($id){
        $sql="DELETE FROM product WHERE id=:id";
        $stmt=$this->conn()->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        echo '<br>'.$id.' is recode deleted<br>';
    }
}
