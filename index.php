<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>A little Angular site</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">

  <link rel="stylesheet" href="styles/app.css">
</head>

<body ng-app="MyApp" ng-cloak>

  <md-content ng-controller="TabOne">
    <md-tabs md-dynamic-height="" md-border-bottom="">
      <md-tab label="Simple Interest">
        <md-content class="md-padding">
          <h1 class="md-display-2">Simple Interest</h1>
          <p>Principal : <br /><input type="text" ng-model="principal"></p>
          <p>Rate of Interest : <br /><input type="text" ng-model="rate"></p>
          <p>Time Period: <br /><input type="text" class="form-control" id="time" ng-model="time" /></p>
          <p class="bg-success">Total Amount You Will Pay: <strong>{{total() | currency}}</strong></p>
          <p class="bg-danger">Total Interest Alone You Will Pay: <strong>{{interest() | currency}}</strong></p>
        </md-content>
      </md-tab>
      <md-tab label="Compound Interest">
        <md-content class="md-padding">
          <h1 class="md-display-2">Compound Interest</h1>
          <p>Principal : <br /><input type="text" ng-model="compoundprincipal"></p>
          <p>Rate of Interest : <br /><input type="text" ng-model="compoundrate"></p>
          <p>Time Period: <br /><input type="text" class="form-control" id="time" ng-model="compoundtime" /></p>
          <p>Compound Frequency : <br />
            <select ng-model="blisterPackTemplateSelected" ng-change="changedValue(blisterPackTemplateSelected)" 
            data-ng-options="blisterPackTemplate as blisterPackTemplate.name for blisterPackTemplate in blisterPackTemplates">
            <option value="">-- Select --</option>
          </select>
          </p>
          <p class="bg-success">Total Amount You Will Pay: <strong>{{compoundtotal() | currency}}</strong></p>
          <p class="bg-danger">Total Interest You Will Pay: <strong>{{compoundinterest() | currency}}</strong></p>
          <p class="bg-danger">Compound Frequency Result: <strong>{{compoundfrequency}}</strong></p>
          
          <!--{{itemList}}-->
        </md-content>
      </md-tab>      
    </md-tabs>
  </md-content>
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
  
  <script src="scripts/app.js"></script>
  
</body>

</html>
