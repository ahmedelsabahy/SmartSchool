<?php
class Database
{
    var $conn;

    
    function __construct()
    {
        $this->conn=mysqli_connect("mysql5040.site4now.net","a6c09f_elsabah","Ahmed8728","db_a6c09f_elsabah");
    }
  //To Insert- Update - delete 
    function RunDML($statment)
    {
        if(!mysqli_query($this->conn,$statment))
            {
                return  mysqli_error($this->conn);
            }
        else
            return "ok";
    }
    //to search
  function GetData($select)
  {
    $result= mysqli_query($this->conn,$select);
    return $result;
  }

}
