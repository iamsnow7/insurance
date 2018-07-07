var myapp = angular.module('mymodule',['ngRoute','ngMaterial','ngMessages']);
	myapp.config(function($routeProvider){
		$routeProvider
		.when("/",{
			templateUrl: "templates/login.php",
			controller: "loginController"
		})

    .when("/register",{
			templateUrl: "templates/register.php",
			controller: "registerController"
    })


		.when("/login",{
			templateUrl: "templates/login.php",
			controller: "loginController"
		})




	});

  myapp.controller("registerController", function($scope){
    $scope.message=" This is register";
  });
  myapp.controller("loginController", function($scope){
    $scope.message=" This is login";
  });
