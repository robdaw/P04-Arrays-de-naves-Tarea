var app = angular.module("pInvApp", []);

app.controller("pInvAppCtrl", function($scope,$http) {
    //mapa de juego
    $scope.mapaCol=4;
    $scope.mapaFil=4;
    //Creacion del array de imagenes
    $scope.imgs = new Array($scope.mapaCol);
    for (i = 0; i < $scope.mapaCol; i++) {
      $scope.imgs[i] = new Array($scope.mapaFil);
      for (j = 0; j < 4; j++) {
        $scope.imgs[i][j]={img:"img/celdaPocketInvaders100.png"};
      }
    }
    //Array de naves humanas
    $scope.numNavesHumanas=3;
    $scope.navesHumanas = new Array($scope.numNavesHumanas);
    //Posicion inicial de las naves
    for (i = 0; i < $scope.numNavesHumanas; i++) {
      $scope.navesHumanas[i]={
        col:i,
        fil:0,
        tipo:"nave",
        img:"img/celdaNavePocketInvaders100.png"
      };
    }
    //Peticion colocar naves iA
    $scope.inicioTablero = function() {
      $stringConexion="lib/app.php?accion=navesHumano&numNaves="+$scope.numNavesHumanas+"&";
      //Generamos la cadena de conexion
      //y colocamos las naves
      for (i = 0; i < $scope.numNavesHumanas; i++) {
        if(i!=0) $stringConexion=$stringConexion+"&";
        $stringConexion=$stringConexion+"col"+i+"="+$scope.navesHumanas[i].col+"&";
        $stringConexion=$stringConexion+"fil"+i+"="+$scope.navesHumanas[i].fil+"&";
        $stringConexion=$stringConexion+"tipo"+i+"="+$scope.navesHumanas[i].tipo;
        $scope.imgs[$scope.navesHumanas[i].fil][$scope.navesHumanas[i].col].img="img/celdaNavePocketInvaders100.png";
      }
      console.log($stringConexion);
      $http.get($stringConexion)
        .then(function(response) {
          $scope.naves = response.data;
          console.log($scope.naves);
          for (i = 0; i < $scope.numNavesHumanas; i++) {
            $scope.imgs[$scope.naves[i].fil][$scope.naves[i].col].img="img/celdaNavePocketInvaders100.png";
          }
        });
    };

});
