<?php
include_once "interface.php";
include_once "Database.php";



class addmissions extends Database implements operation
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
        return parent::GetData("select * from admissions");

    }


}



?>