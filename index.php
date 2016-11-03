<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pocket Invaders DAW version</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="./js/app.js"></script>
  </head>
  <body ng-app="pInvApp" ng-controller="pInvAppCtrl">
    <div class="pure-g">
        <div class="pure-u-1"><img src="img/pInvadersLogoF3.png" alt="Logo" class="logo"/></div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-2">
            <!--Tablero de juego-->
            <center>
            <table>
              <tr ng-repeat="i in [0,1,2,3]">
                <td ng-repeat="j in [0,1,2,3]"><img src={{imgs[i][j].img}} alt="celda" class="celda"/></td>
              </tr>
            </table>
            </center>
            <!--Tablero de juego-->
        </div>
        <div class="pure-u-1-2">
          <p>
            <form class="pure-form pure-form-stacked">
              <fieldset>
                <legend>INICIAR TABLERO</legend>
                  <button type="submit" class="pure-button pure-button-primary" ng-click="inicioTablero()">Inicia Tablero</button>
                </fieldset>
              </form>
          </p>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1"><p>{{imgs[0].img}}</p></div>
    </div>
  </body>
</html>
