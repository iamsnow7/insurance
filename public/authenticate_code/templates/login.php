<div class="" style="margin: 0 auto; max-width: 1000px;">
  <h4 style="margin-bottom:20px;">Sign in into your Account</h4>
  <form action="index.phpp" method="post" name="myForm" novalidate>
    <table>
      <thead>
        <tr>
          <th>Username: </th>
          <td>
            <input name="username" ng-model="user.username" required><br/>
            <!-- <div ng-messages="colorForm.favoriteColor.$error">
              <div ng-message="required">This is required!</div>
            </div><br/> -->
              <span style="color:red" ng-show="myForm.username.$dirty && myForm.username.$invalid">
                <span ng-show="myForm.username.$error.required">Username is required.</span>
              </span>
          </td>
        </tr>
        <tr>
          <th>Password: </th>
          <td>
            <input type="password" name="password" ng-model="user.password" required><br/>
              <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                <span ng-show="myForm.password.$error.required">Password is required.</span>
              </span>
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <input class="md-button" type="submit" name="" value="Login" ng-disabled="myForm.$invalid">
          </td>
        </tr>
      </thead>

    </table>

  </form>
    
    

  <div class="" style="margin: 0 auto; max-width: 1000px;">
    Trouble signing in? click <a href="#">Here</a>
  </div>
</div>
