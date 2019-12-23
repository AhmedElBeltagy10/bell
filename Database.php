<?php

class Database  
{

    var $conn;
    //connection with database
 function __construct(){
    $this->conn=mysqli_connect("localhost","root","","testphp");
  }

  // using to execute insert / update / delete
  function RUNDML($statment)
  {
     
     if(!mysqli_query($this->conn,$statment))
     {
        return mysqli_error($this->conn);
     }

  }
  // using search
  function RUNSearch($statment)
  {
     $result=mysqli_query($this->conn,$statment);
      
     return $result;
  }




}

?>