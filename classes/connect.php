<?php

class Database {

  private $host = "https://saldums1.github.io/";
  private $username = "root";
  private $password = "";
  private $db = "mybook_db";

  function connect(){
    $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    return $connection;
  }
  function read($query){
    $conn = $this->connect();
    $result = mysqli_query($conn,$query);

    if(!$result) {
      return false;
    }else{
      $data = false;
      $result = mysqli_query($conn,$query);

       while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
     }
     return $data;
    } 

  }
  function save($query){
    $conn = $this->connect();
    $result = mysqli_query($conn,$query);

    if(!$result) {
      return false;
    }else{
      return true;
    } 

  }
}  





