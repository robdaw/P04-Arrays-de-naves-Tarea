<?php

 include "ia.php";



 $nave=new ia();
 $nave->setNaveHumana("nave",2,3);
 $navesH=$nave->getNavesIA();


  print_r ($navesH);

 ?>
