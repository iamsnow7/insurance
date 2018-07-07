var myapp = angular.module("module", []);
myapp.controller("Controller", function($scope){

  $scope.register = function(){
    $scope.registerAcct = true;
    $scope.regOther = false;
    $scope.getInvested = false;
    $scope.getAmt = false;
    $scope.hidereg = true;
  }

  $scope.registerppl = function(){
    $scope.regOther = true;
    $scope.getInvested = false;
    $scope.getAmt = false;
    $scope.hidereg = false;
  }

  $scope.getMoney = function(){
    $scope.getInvested = true;
    $scope.getAmt = false;
    $scope.hidereg = false;
    $scope.regOther = false;
  }

  $scope.percentage = function(){
    $scope.getAmt = true;
    $scope.hidereg = false;
    $scope.regOther = false;
    $scope.getInvested = false;
  }






});
