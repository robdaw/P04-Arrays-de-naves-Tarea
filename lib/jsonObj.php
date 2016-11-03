<?php
/**
 *
 */
class jsonObj
{
  private $ia;
  function __construct($ia){
    $this->ia=$ia;
  }
  function generaNaveAle(){
    $this->ia->randomPos();
  }
  function devuelveNave(){
    $arr=['columna'=>0,'fila'=>0];
    $arr['columna']=$this->ia->getColumna();
    $arr['fila']=$this->ia->getFila();
    echo json_encode($arr);
  }
  function devuelveNaves(){
    echo json_encode($this->ia->getNavesIA());
  }
}

 ?>
