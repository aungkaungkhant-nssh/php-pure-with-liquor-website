<?php

class QueryBuilder{
    private $db;
    public function __construct(Connection $db)
    {
        $this->db=$db->connect();
    }
    public function all($table){
        try{
            $statement=$this->db->prepare("Select * From $table");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function insert($dataArray,$table){
        try{
            $dataKeys=array_keys($dataArray);
            $cols=implode(",",$dataKeys);
            $questionMark="";
            foreach($dataKeys as $key){
                $questionMark.="?,";
            }
            $questionMark=rtrim($questionMark,",");
            $sql="INSERT INTO $table ($cols) VALUES ($questionMark)";
           
            $statement=$this->db->prepare($sql);
            $dataValue=array_values($dataArray);
            $statement->execute($dataValue);
            return $this->db->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function roles($roleId){
        $statement=$this->db->prepare("select roles.role_name from admins left join roles  on $roleId=roles.id");
        $statement->execute();
        return $statement->fetch();
    }
    public function update($dataArray,$table,$id){
            $condition="";
            foreach($dataArray as $key=>$value){
                $condition.="$key='$value',";
            }
           $condition=rtrim($condition,",");
            $sql="UPDATE $table set $condition WHERE id=:id";
            $statement=$this->db->prepare($sql);
            $statement->execute([
                ":id"=>$id
            ]);   
            return $statement->rowCount();
    }
    public function delete($table,$id){
        $sql="Delete FROM $table WHERE :id=id";
        $statement=$this->db->prepare($sql);
        $statement->execute([
            ":id"=>$id
        ]);   
        return $statement->rowCount();
    }
    public function where($table,$id){
        $sql="SELECT * FROM $table WHERE :id=id";
        $statement=$this->db->prepare($sql);
        $statement->execute([
            ":id"=>$id
        ]);   
        return $statement->fetch();
    }
    public function limit($table,$start){
        try{
            $statement=$this->db->prepare("Select * From $table LIMIT $start,3");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function checkEmailAndPassword($email,$password){
        try{
            $statement=$this->db->prepare("
            select admins.*,roles.role_name from admins left join roles on admins.role_id=roles.id where admins.email=:email and admins.password=:password
            ");
            $statement->execute([
                ":email"=>$email,
                ":password"=>$password
            ]);
           return $statement->fetch();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function explore($table,$start){
        try{
            $statement=$this->db->prepare("Select * From $table LIMIT $start,3");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function orders($order_id){

        try{
            $statement=$this->db->prepare("select order_items.*,products.* from order_items left join products on order_items.product_id=products.id where order_items.order_id=$order_id");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
      
    }
}