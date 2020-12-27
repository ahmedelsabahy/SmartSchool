<?php

    include_once "interface.php";
    include_once "Database.php";
    
    class registercours extends Database implements Operation
    {
        private $ncours;
        private $fullname;
        private $age;
        private $address;
        private $acadmyyear;
        private $mail;
        private $phone;
    
    
        public function getncours()
        {
            return $this->ncours;
        }
        
        public function getfullname()
        {
            return $this->fullname;
        }
        public function getage()
        {
            return $this->age;
        }
        public function getaddress()
        {
            return $this->address;
        }
        public function getacadmyyear()
        {
            return $this->acadmyyear;
        }
        public function getmail()
        {
            return $this->mail;
        }
        public function getphone()
        {
            return $this->phone;
        }


        public function setncours($value)
        {
            $this->ncours = $value;
        }
        public function setfullname($value)
        {
            $this->fullname = $value;
        }
        public function setage($value)
        {
            $this->age = $value;
        }
        public function setaddress($value)
        {
            $this->address = $value;
        }
        public function setacadmyyear($value)
        {
            $this->acadmyyear = $value;
        }
        public function setmail($value)
        {
            $this->mail = $value;
        }
        public function setphone($value)
        {
            $this->phone = $value;
        }
        
    
    
        public function add()
        {
            return parent::RunDML("insert into registercourse values('".$this->getncours()."','".$this->getfullname()."','".$this->getage()."','". $this->getaddress(). "','". $this->getacadmyyear()."','". $this->getmail()."','". $this->getphone()."')");
        }
        public function update()
        {
        }
        public function delete()
        {
        }
        public function getdate()
        {
        }
    }

?>