<?php

require_once "class_bmipasien.php";

class bmi extends BMIPasien{
    public $berat;
    public $tinggi;

    public function __construct($berat, $tinggi){
        $this -> berat = $berat;
        $this -> tinggi = $tinggi;
    }

    function getnilaiBMI(){
        return $this->BMI = $this->berat / ($this->tinggi * $this->tinggi);
    }

    function getstatusBMI(){

        if ($this->BMI >= 30){
            return "Kegemukan (obesitas)";
        }
        else if ($this->BMI >= 25){
            return "Kelebihan berat badan";
        }
        else if ($this->BMI >=18.5){
            return "Normal (ideal)";
        }
        else if($this->BMI < 18.5){
            return "Kekurangan berat badan";
        }
    }

}

?>