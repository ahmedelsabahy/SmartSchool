<?php
include_once "interface.php";
include_once "Database.php";



class training extends Database implements operation
{
    public function add()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function getdate()
    {
        return parent::GetData(" select * from training ");

    }
    public function lasttrain()
    {
        return parent::GetData(" select * from training order by idtrain desc limit 3");

    }
    public function getdiscoun()
    {
        return parent::GetData("select * from  training where descount > 0");
    }
    public function getco()
    {
        return parent::GetData(" select * from training ");

    }
    public function getcour()
    {
        return parent::GetData("select * from courses");

    }
    public function search()
    {
        return parent::GetData("select * from training where nametrain like '".$_GET["se"]."%'");

    }



}



?>