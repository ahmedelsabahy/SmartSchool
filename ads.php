<?php
include_once "interface.php";
include_once "Database.php";



class ads extends Database implements operation
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
        $rs=parent::GetData(" select * from advertising where enddate > curdate()" );
        return $rs;

    }


}



?>