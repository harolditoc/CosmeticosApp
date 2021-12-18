<?php
  class conexion{
    public $con;
    public function conectar(){
      $this->con = mysqli_connect("sql10.freemysqlhosting.net:3306","sql10459018","c6auArVLMK","sql10459018");
    }
  }
?>