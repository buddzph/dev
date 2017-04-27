angular.module("MyApp", ["ngMaterial"])

  .controller("TabOne", function($scope) {
    // Simple Interest
  	$scope.principal = 0;
    $scope.rate = 0;
    $scope.time = 0;
    //$scope.frequency = ["Yearly", "Quarterly", "Monthly", "Daily"];
    var grandTotal = 0;
    $scope.total = function(){
      grandTotal = $scope.principal * (1 + ($scope.rate / 100) * $scope.time);
      return grandTotal;
    }
    $scope.interest = function(){
      var interestOnly = grandTotal - $scope.principal;
      return interestOnly;
    };
  
  	// Compound Interest
  	$scope.compoundprincipal = 0;
    $scope.compoundrate = 0;
    $scope.compoundtime = 0;
  
  	$scope.itemList = [];
  	$scope.compoundinterest = '';
    $scope.blisterPackTemplates = [{id:1,name:"Yearly"},{id:2,name:"Quarterly"},{id:3,name:"Monthly"}];  
  	
    var compoundgrandTotal = 0;
    $scope.compoundtotal = function(){
      compoundgrandTotal = $scope.compoundprincipal * (1 + ($scope.compoundrate / 100) * $scope.compoundtime);
      return compoundgrandTotal;
    }
    $scope.compoundinterest = function(){
      var compoundinterestOnly = compoundgrandTotal - $scope.compoundprincipal;
      return compoundinterestOnly;
    };
  	$scope.changedValue = function(item) {
      switch (item.name) {
        case 'Yearly':
          // var totalyear = $scope.compoundprincipal * 12;
          var comyearly = (Math.round(($scope.compoundprincipal * $scope.compoundrate) / $scope.compoundtime * 100)/100) * 12;
          $scope.compoundfrequency = comyearly;
          break;
        case 'Quarterly':
          var comquarterly  =  (Math.round(($scope.compoundprincipal * $scope.compoundrate) / $scope.compoundtime * 100)/100) * 6;
          $scope.compoundfrequency = comquarterly;
          break;
        case 'Monthly':
          var commonthly  = Math.round(($scope.compoundprincipal * $scope.compoundrate) / $scope.compoundtime * 100)/100;
          $scope.compoundfrequency = commonthly;
          break;
        default:
      }
  	}
	});

