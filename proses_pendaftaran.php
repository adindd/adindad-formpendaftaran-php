<?php
class  Mahasiswa{
    public  $nama ="";
    public  $email ="";
    public  $sandi ="";
    
    function  __construct ( $nama , $email , $password ){
         $this-> nama = $nama ;
         $this-> email = $email ;
         $this-> password = $password ;
    }
    function  tampilbiodata (){
       echo  $this->nama ." <br /> ";
       echo   $this->email ." <br /> " ;
       echo  $this->password ." <br /> ";
    }
    function validasi (){
            if ( $this -> nama ==""){
                echo "masukan nama ";            
            }
            if ( $this -> email ==""){
                echo "masukan email ";
            }
            if ( $this -> password ==""){
                echo "masukan password ";
            }
            if ( $this-> nama ==""AND $this-> email == ""AND $this-> password ==""){
                echo "mengembalikan  salah" ;
            } else {
                echo "kembali  benar" ;
            }
    }
}   
?>