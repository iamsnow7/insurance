<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="module">
  <head>
    <meta charset="utf-8">
    <title>No one insuracnce club</title>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/css.css"/>

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
        <li class="navigation" style="width:90px;"><i class="fa fa-home"></i><a class="nav_link" href="#"> Home </a></li>
        <li class="navigation" style="width:90px;"><a class="nav_link" href="#">About us</a></li>
        <li class="navigation"><a class="nav_link" href="#work">How we work</a></li>
        <li class="navigation" style="width:90px;"><a class="nav_link" href="#terms">Terms</a></li>
        <li class="navigation" style="width:90px;">
          <i class="fa fa-key"></i>
          <a class="nav_link" href="authenticate/">Login</a>
        </li>
        <li class="navigation" style="width:100px;">
          <i class="fa fa-user"></i>
          <a class="nav_link" href="authenticate/">Register</a>
        </li>

        <div class="clear"></div>
      </ul>

    </div>

    <!-- main banner display -->
    <!-- <div class="banner">
      <img src="images/Impact-Investing-Jars.jpg" alt="" style="width:100%;">
    </div> -->

    <div class="banner" style="height:500px;width:100%;background-image: url('images/Impact-Investing-Jars.jpg'); background-repeat:no-repeat;background-size:cover; padding-bottom:120px;">

      <div class="" style="padding-top:50px;">
        <h1 style="text-align:center;margin-bottom:10px;">INSURANCE COMPANY</h1>

        <p class="description">
          An insurance policy is a financial contract between a policyholder and an insurer, which is almost always an insurance company. The insurer agrees to pay in the event that the person or property insured suffers a type of loss named in the policy.
        </p>

        <p class="description">
          For example, an auto liability policy will pay for the damage sustained by another vehicle and any injuries to its occupants in an accident where you are at fault. A renters policy may pay for damage to your stereo as a result of a water leak in your apartment.
        </p>

        <p class="description">
          The protection remains in force for a specified "policy term," typically six months or a year, after which you´ll need to renew the policy in order to continue the coverage.
        </p>
      </div>

      <div class="get_started">
        <input class="get_started_btn" type="button" name="" value="GET STARTED">
      </div>


    </div>

    <div class="content_wrapper">
      <div class="col-sm-4" style="border: 1px solid black; margin-top: 10px;">

      </div>
      <div class="col-sm-4" style="text-align:center;">
        <h3 style="margin-top: 0px;">HOW WE OPERATE</h3>
      </div>
      <div class="col-sm-4" style="border: 1px solid black;margin-top: 10px;">

      </div>

      <div class="clear"></div>
    </div>


    <div class="works" ng-controller="Controller" id="work">

      <div class="col-sm-6">
        <strong style="border-bottom:5px solid brown;">FIRST STEP</strong>
          <p class="work_para" style="" ng-click="register()">
            Register for free and a code will be sent to you through email provided.
            (If refered, provide the referal code during signup).<br/>
            Invest any amount using the mobile money account or bank account.
          </p><br/>

        <strong style="border-bottom:5px solid brown;">SECOND STEP</strong>
        <p class="work_para" style="" ng-click="registerppl()">
          Register three people an amount greater or equal to the the registrants amount.
        </p><br/>

        <strong style="border-bottom:5px solid brown;">THIRD STEP</strong>
        <p class="work_para" style="" ng-click="getMoney()">
          Get the invested amount back immediately the third person is registered.
        </p><br/>

        <strong style="border-bottom:5px solid brown;">FOURTH STEP</strong>
        <p class="work_para" style="" ng-click="percentage()">
          Get 10% of the invested amount every month for seven months.
        </p><br/>
      </div>


      <div class="col-sm-6" id="test" style="border: 1px solid brown;padding:50px;">
        <div class="regAct" ng-hide="registerAcct" ng-show="hidereg">
          <ul>
            <h4 style="margin-top:0px;">create an Account</h4>
            <li class="registerList">
              Register an account as page opens (If refered, provide the referal code during signup)
            </li>
            <li class="registerList">
              Provide all needed information, when done, invest the start up amount required..(steps will be included later)
            </li>
            <li class="registerList">
              step will be included
            </li>
            <li class="registerList">
              step will be included
            </li>
          </ul>
        </div>


        <div class="" ng-show="regOther">
          <ul>
            <h4 style="margin-top:0px;">Introduce three(3) people</h4>
            <li class="registerList">
              step will be included
            </li>
            <li class="registerList">
              step will be included
            </li>
            <li class="registerList">
              step will be included
            </li>
            <li class="registerList">
              step will be included
            </li>
          </ul>
        </div>

        <div class="" ng-show="getInvested">
          get your invested money back
        </div>

        <div class="" ng-show="getAmt">
          get 10% of your invested money back
        </div>
      </div>

      <div class="clear"></div>

    </div>




    <!-- this side for terms and conditions -->
    <div class="content_wrapper">
      <div class="col-sm-4" style="border: 1px solid black; margin-top: 10px;"></div>
      <div class="col-sm-4" style="text-align:center;">
        <h3 style="margin-top: 0px;">TERMS</h3>
      </div>
      <div class="col-sm-4" style="border: 1px solid black;margin-top: 10px;"></div>
      <div class="clear"></div>
    </div>

    <div class="terms" id="terms">
      <h4>TERMS AND CONDITION</h4>

      <p class="termsPara">
        By signing up, you agree to the terms and condition of ......
      </p>
      <p class="termsPara">
        This service is provided &nbsp;as an available service. We do not make warranties of any kind, either expressed or implied and we are not financial experts, so before using or making decisions from every information in <b>CLUB NAME</b>, consult a professional.
      </p>

    </div>












  </body>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/index.js"></script>
  <script src="js/textition.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/angular.min.js"></script>
  <script type="text/javascript" src="js/angular-route.min.js"></script>
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/authCat.js"></script>
    <script type="text/javascript" src="js/clicktoshow.js"></script>



</html>
