<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="mymodule">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/css.css"/>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  </head>
  <body>
    <!-- the top brown space with contact info -->
    <div class="contactInfo">
      <li class="contact">
        <i class="fa fa-phone"></i>
        <a class="contactLink" href="#">+233 654 5656 66</a>
      </li>
      <li class="contact">
        <i class="fa fa-envelope-o"></i>
        <a class="contactLink" href="#">info@info.com</a>
      </li>

      <div class="clear"></div>
    </div>

    <!-- navigation part -->
    <div class="wrapper">
      <ul>
        <li class="navigation" style="width:90px;"><i class="fa fa-home"></i><a class="nav_link" href="../"> Home </a></li>
        <li class="navigation" style="width:90px;">
          <i class="fa fa-key"></i>
          <a class="nav_link" href="#!/login">Login</a>
        </li>
        <li class="navigation" style="width:100px;">
          <i class="fa fa-user"></i>
          <a class="nav_link" href="#!/register">Register</a>
        </li>

        <div class="clear"></div>
      </ul>

    </div>


    <!-- registration content -->
    <md-card>

     <md-card-content>

       <ng-view>
       </ng-view>

     </md-card-content>
  </md-card>

  </body>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

 <!-- Angular Material Library -->
 <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>
 <script type="text/javascript" src="js/authCat.js"></script>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/angular.min.js"></script>
 <script type="text/javascript" src="js/angular-route.min.js"></script>
</html>
