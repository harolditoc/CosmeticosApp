<?php
  include "../conexion/cn.php";
  include "../beans/pais.php";
  class paisModelo extends conexion{
      public function insertarPaisModelo($id,$nom,$cod){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO pais(idpais,nombrep,codigop) VALUES (?,?,?)");
        $pre->bind_param("ssi",$id,$nom,$cod);
        $pre->execute();
      }
      public static function obtenerPorCodigo($cod){
        $conc = new conexion();
        $conc->conectar();
        $pre = mysqli_prepare($conc->con, "SELECT * FROM pais WHERE codigop = ?");
        $pre->bind_param("i",$cod);
        $pre->execute();
        $res = $pre->get_result();
        return $res->fetch_object(pais::class);
      }
      public function actualizarNombrePaisModelo($cod, $nombre){
        $paisaux = $this->obtenerPorCodigo($cod);
        $paisaux->nombrep = $nombre;
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE pais SET nombrep=? WHERE codigop=?");
        $pre->bind_param("si",$paisaux->nombrep,$paisaux->codigop);
        $pre->execute();
      }
      public function eliminarPaisModelo($cod){
        $paisaux = $this->obtenerPorCodigo($cod);
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM pais WHERE codigop=?");
        $pre->bind_param("i",$paisaux->codigop);
        $pre->execute();
      }
      public static function todoModelo(){
        $conc = new conexion();
        $conc->conectar();
        $pre = mysqli_prepare($conc->con, "SELECT * FROM pais");
        $pre->execute();
        $res = $pre->get_result();
        $paises = [];
        while($paisi = $res->fetch_object(pais::class)){
          array_push($paises, $paisi);
        }
        return $paises;
      }
  }
?>