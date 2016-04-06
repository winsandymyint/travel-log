<div class="dropdown-grids">
    <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
      <div id="loginBox">                
        <form id="loginForm" action="login_Controller.php" method="post">
          <div class="login-grids">
            <div class="login-grid-left">
              <fieldset id="body">
                <fieldset>
                  <label for="email">Username</label>
                  <input type="text" name="uname" id="uname" class="form-control"/>
                </fieldset>
                <fieldset>
                  <label for="pwd">Password</label>
                  <input type="password" name="pwd" id="pwd" class="form-control"/>
                </fieldset>
                <input type="submit" value="Login" class="btn"/>
                <label for="checkbox">  <input type="checkbox" id="checkbox"> <i>Remember me</i></label>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
<div class="clearfix"> </div>