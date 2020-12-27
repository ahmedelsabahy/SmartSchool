<?php
ob_start();
include_once "interface.php";
include_once "Database.php";



class student extends Database implements Operation
{
    private $idstudent;
    private $name;
    private $mail;
    private $phone;
    private $address;
    private $password;


    public function getidstudent()
    {
        return $this->idstudent;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getmail()
    {
        return $this->mail;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function getpassword()
    {
        return $this->password;
    }
    public function getaddress()
    {
        return $this->address;
    }

    public function setidstudent($value)
    {
        $this->idstudent = $value;
    }
    public function setname($value)
    {
        $this->name = $value;
    }
    public function setmail($value)
    {
        $this->mail = $value;
    }
    public function setphone($value)
    {
        $this->phone = $value;
    }
    public function setpassword($value)
    {
        $this->password = $value;
    }
    public function setaddress($value)
    {
        $this->address = $value;
    }


    public function add()
    {
        return parent::RunDML("insert into student values(Default,'" . $this->getname() . "','" . $this->getmail() . "','" . $this->getphone() . "','" . $this->getaddress() . "','" . $this->getpassword() . "','1')");
    }
    public function update()
    {
        return parent::RunDML("update student set   Name='" . $this->getname() . "', mail='" . $this->getmail() . "', phone='". $this->getphone()."', address='". $this->getaddress()."' , password='" . $this->getpassword() . "' where idstudent='" . $_SESSION["id"] . "'");
    }
    public function delete()
    {
        return parent::RunDML("delete from student  where idstudent='" . $_SESSION["id"] . "' ");
    }
    public function getdate()
    {
    }
    public function signin()
    {
        $si = parent::GetData("select * from student where(mail='" . $this->getmail() . "' or phone='" . $this->getphone() . "') and password='" . $this->getpassword() . "' ");
        return $si;
    }
    public function namebyid()
    {
        $si = parent::GetData("select * from student where idstudent ='" . $_SESSION["id"] . "' ");
        return $si;
    }
    public function getbymail()
    {
        $si = parent::GetData("select * from student where mail ='" . $this->getmail() . "' ");
        return $si;
    }
    public function updatepassword()
    {
        return parent::RunDML("update student set password='" . $this->getpassword() . "' where idstudent='" . $_GET["id"] . "'");
    }
    
}
