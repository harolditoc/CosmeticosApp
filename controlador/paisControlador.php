<?php
  include "../modelo/paisModelo.php";
  class paisControlador extends paisModelo{
    public function insertarPaisControlador($id,$nom,$cod){
      $paism = new paisModelo();
      $paism->insertarPaisModelo($id,$nom,$cod);
    }
    public function buscarCodPais($cod){
      $paisa = paisModelo::obtenerPorCodigo($cod);
      return $paisa;
    }
    public function actualizarNombrePaisControlador($cod, $nombre){
      $paism = new paisModelo();
      $paism->actualizarNombrePaisModelo($cod, $nombre);
    }
    public function eliminarPaisControlador($cod){
      $paism = new paisModelo();
      $paism->eliminarPaisModelo($cod);
    }
    public function todoControlador(){
      $paises2 = paisModelo::todoModelo();
      return $paises2;
    }
  } 
?>