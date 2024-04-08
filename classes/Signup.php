<?php
class Signup extends Db{
    private $username;
    private $mobilenumber;

    public function __construct($placeholder_username,$placeholder_mobile_number)///////public
    {
        $this->username=$placeholder_username;
        $this->mobilenumber=$placeholder_mobile_number;
    }
   
    private function insertdata(){
        $query="INSERT INTO signup (username,mobile_number) VALUES (:username, :mobile_number);";
        $stmt=parent::getconnection()->prepare($query);
        $stmt->bindParam(':username',$this->username);////error
        $stmt->bindParam(':mobile_number',$this->mobilenumber);////error ocurred here 
        $stmt->execute();
    }

    private function emptysubmit(){
        if(isset($this->username)&&isset($this->mobilenumber)){
            return false;
        }else{
            return true;
        }
    }

    public function faults(){
        if($this->emptysubmit()){
            header('LOCATION: ../signup_index.php');
            die();
        }else{
            $this->insertdata();
            header('LOCATION: ../signup_index.php?signup=success');
        }
    }
}