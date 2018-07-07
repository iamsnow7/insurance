var myapp = angular.module('mymodule',['ngRoute','ngMaterial','ngMessages','angular-loading-bar']);
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

  myapp.controller("registerController", function($scope,$http){
    $scope.message=" This is register";
      
  });
  myapp.controller("loginController", function($scope,$http){
    $scope.message=" This is login";
      
//    $http.post(baseUrl+"/first_post").success(function(response){
//        console.log(response);  
//      });  
      
      $http({
                            url: baseUrl+"/first_post",
                            method:'POST',
                            data    : $.param({ }),  // pass in data as strings
                            headers : { 'Content-Type': 'application/x-www-form-urlencoded',
                                         "X-Requested-With":"XMLHttpRequest" }
                            })
                            .then(function(response){
                                console.log(response);
                            })
                            ;
                                                            
  });
