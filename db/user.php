<?php

class user{
//private database
private $db;

//constructor to initialize private to the database connection
function __construct($conn){
    $this->db = $conn;
}

public function InsertUser($username,$password){
    try {
        $result = $this->getuserbyusername($username);
        if($result['num']> 0){
            return false; 
        }else{
        $new_password = md5($password.$username); 
        //define all sql statemnet to be execution
        $sql = "INSERT INTO users (username,password) VALUES (:username, :password)";
        //prepare the sql statement for execution
        $stmt = $this->db->prepare($sql);
        //biind all placeholderto the actual values
        $stmt->bindparam(':username', $username);
        $stmt->bindparam(':password', $new_password);
        
        //Execute Statement
        $stmt->execute();
        return true;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }

}

public function getuser($username,$password){
    try{
        $sql= "select * from users where username = username AND password = password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username);
        $stmt->bindparam(':password', $password);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }

}

public function getuserbyusername($username){
    try{
        $sql = "SELECT COUNT(*) as num FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username);
       
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }

}

}


?>