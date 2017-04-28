<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title></title>

    <link rel="manifest" href="manifest.json">

    <!-- un-comment this code to enable service worker
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
          .then(() => console.log('service worker installed'))
          .catch(err => console.log('Error', err));
      }
    </script>-->

    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">

        .cartao {
  background-image: url("cardback.gif");
  border-color: #808080 #000000 #000000 #808080;
  border-width: 1px;
  border-style: solid;
  color: #000000;
  font-size: 20pt;
  position: absolute;
  width:  3.75em;
  height: 5.00em;
}

.front {
  background-color: #ffffff;
  color: #000000;
  position: absolute;
  width: 100%;
  height: 100%;
}


      
      .spotA1 { position: absolute; left: 0.60em; top: 0.5em; }
      .spotA2 { position: absolute; left: 0.60em; top: 1.5em; }
      .spotA3 { position: absolute; left: 0.60em; top: 2.0em; }
      .spotA4 { position: absolute; left: 0.60em; top: 2.5em; }
      .spotA5 { position: absolute; left: 0.60em; top: 3.5em; }

      .spotB1 { position: absolute; left: 1.55em; top: 0.5em; }
      .spotB2 { position: absolute; left: 1.55em; top: 1.0em; }
      .spotB3 { position: absolute; left: 1.55em; top: 2.0em; }
      .spotB4 { position: absolute; left: 1.55em; top: 3.0em; }
      .spotB5 { position: absolute; left: 1.55em; top: 3.5em; }

      .spotC1 { position: absolute; left: 2.50em; top: 0.5em; }
      .spotC2 { position: absolute; left: 2.50em; top: 1.5em; }
      .spotC3 { position: absolute; left: 2.50em; top: 2.0em; }
      .spotC4 { position: absolute; left: 2.50em; top: 2.5em; }
      .spotC5 { position: absolute; left: 2.50em; top: 3.5em; }

    </style>

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
    -->

    <!-- ionic/angularjs js -->
    <script src="lib/ionic/js/ionic.bundle.js"></script>

    <!-- cordova script (this will be a 404 during development) -->
    <script src="cordova.js"></script>

    <!-- your app's js -->
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
  </head>

  <body ng-app="starter">
    <ion-nav-view></ion-nav-view>
  </body>
</html>
