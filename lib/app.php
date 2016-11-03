<?php
  include 'jsonObj.php';
  include 'ia.php';

  $iaJuego=new ia();
  $jsObj=new jsonObj($iaJuego);
  //Comprobación de accion
  if(isset($_GET['accion'])){
    if($_GET['accion']=='navesHumano'){
          //Capturamos el numero de naves y generamos el array de naves
          $numNavesHumanas=$_GET['numNaves'];
          $iaJuego->setMapaCol($numNavesHumanas);
          $iaJuego->setMapaFil($numNavesHumanas);
          for($i=0;$i<$numNavesHumanas;$i++){
            $iaJuego->setNaveHumana($_GET['tipo'.$i],$_GET['fil'.$i],$_GET['col'.$i]);
          }
    }
  }
  $jsObj->devuelveNaves();
?>
