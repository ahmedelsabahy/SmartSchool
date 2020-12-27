<?php

    include_once "interface.php";
    include_once "Database.php";
    
    class applyonsmart extends Database implements Operation
    {
        private $i1;
        private $i2;
        private $i3;
        private $i4;
        private $i5;
        private $i6;
        private $i7;
        private $i8;
        private $i9;
        private $i10;
        private $i11;
        private $i12;
        private $i13;
        private $i14;
        private $i15;
        private $i16;
        private $i17;
        private $i18;
        private $i19;
        private $i20;
        private $i21;
        private $i22;
        private $i23;
       
       
    
    
        public function geti1()
        {
            return $this->i1;
        }
        public function geti2()
        {
            return $this->i2;
        } 
         public function geti3()
        {
            return $this->i3;
        }  
        public function geti4()
        {
            return $this->i4;
        }  public function geti5()
        {
            return $this->i5;
        } 
         public function geti6()
        {
            return $this->i6;
        } 
         public function geti7()
        {
            return $this->i7;
        }  
        public function geti8()
        {
            return $this->i8;
        }  public function geti9()
        {
            return $this->i9;
        }  public function geti10()
        {
            return $this->i10;
        }  public function geti11()
        {
            return $this->i11;
        }  public function geti12()
        {
            return $this->i12;
        }  public function geti13()
        {
            return $this->i13;
        }
        public function geti14()
        {
            return $this->i14;
        }
        public function geti15()
        {
            return $this->i15;
        }
        public function geti16()
        {
            return $this->i16;
        }
        public function geti17()
        {
            return $this->i17;
        }public function geti18()
        {
            return $this->i18;
        }
        public function geti19()
        {
            return $this->i19;
        }
        public function geti20()
        {
            return $this->i20;
        }
        public function geti21()
        {
            return $this->i21;
        }
        public function geti22()
        {
            return $this->i22;
        }
        public function geti23()
        {
            return $this->i23;
        }



       
       
       
            

        public function seti1($value)
        {
            $this->i1 = $value;
        }
        public function seti2($value)
        {
            $this->i2 = $value;
        }
        
        public function seti3($value)
        {
            $this->i3 = $value;
        }
        
        public function seti4($value)
        {
            $this->i4 = $value;
        }
        public function seti5($value)
        {
            $this->i5 = $value;
        }
        
        public function seti6($value)
        {
            $this->i6 = $value;
        }
        
        public function seti7($value)
        {
            $this->i7 = $value;
        }
        public function seti8($value)
        {
            $this->i8 = $value;
        }
        public function seti9($value)
        {
            $this->i9 = $value;
        }
        
        public function seti10($value)
        {
            $this->i10 = $value;
        }
        public function seti11($value)
        {
            $this->i11 = $value;
        }
        public function seti12($value)
        {
            $this->i12 = $value;
        }
        
        public function seti13($value)
        {
            $this->i13 = $value;
        }
        
        public function seti14($value)
        {
            $this->i14 = $value;
        }
        
        public function seti15($value)
        {
            $this->i15= $value;
        }
        public function seti16($value)
        {
            $this->i16 = $value;
        }
        
        public function seti17($value)
        {
            $this->i17 = $value;
        }
        public function seti18($value)
        {
            $this->i18 = $value;
        }
        public function seti19($value)
        {
            $this->i19 = $value;
        }
        
        public function seti20($value)
        {
            $this->i20 = $value;
        }
        public function seti21($value)
        {
            $this->i21 = $value;
        }
        public function seti22($value)
        {
            $this->i22 = $value;
        }
     public function seti23($value)
        {
            $this->i23 = $value;
        }
      
    
    
        public function add()
        {
            return parent::RunDML("insert into applysmart values('".$this->geti1()."','".$this->geti2()."','".$this->geti3()."','". $this->geti4(). "','". $this->geti5()."','". $this->geti6()."','". $this->geti7()."','".$this->geti8()."','".$this->geti9()."','".$this->geti10()."','". $this->geti11(). "','". $this->geti12()."','". $this->geti13()."','". $this->geti14()."','".$this->geti15()."','".$this->geti16()."','".$this->geti17()."','". $this->geti18(). "','". $this->geti19()."','". $this->geti20()."','". $this->geti21()."','". $this->geti22()."','". $this->geti23()."')");
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