<!--Modal Login-->
    <div id="Login" class="modalLogin">
          <div>
    <form method="post" action="../Users/checklogin.php">
           <a href="#close" title="Close" class="close">X</a>
           <div class="login"> Login </div>
       <div class="logincon">
       <div class="Logo"><i class="ion-ios-person size-96"></i></div>
               <p class="fieldset">
             <label class="label"><i class="ion-ios-person-outline size-32"></i></label>
     <input type="text" name="username" maxlength="30" class="textbox full-width"  required placeholder="Username">
             </p>
             <p class="fieldset">
             <label class="label"><i class="ion-ios-locked-outline size-32"></i></label>
     <input type="password" name="password" maxlength="30"  class="textbox full-width"  required placeholder="Password"><br>
             </p>
           <input type="submit" name="submit" value="Log In" class="button" ><br>
       <a href="#" id="label">Forgot your password?</a>      <a href="#SignUp" id="label">Register Now</a>

        </div>
      </form>
          </div>
        </div>
<!--/Modal Login-->

<!--Modal SignUp-->
    <div id="SignUp" class="modalLogin">
          <div class="SignUp">
            <form method="post" action="../Users/Confirm.php">
           <a href="#close" title="Close" class="close">X</a>
           <div class="login"> Sign Up </div>
       <div class="logincon">
      <p class="fieldset">
             <input type="text" name="firstname" maxlength="30" class="textbox half-width" tabindex="1" required placeholder="First Name">
             <input type="text" name="lastname" maxlength="30"  class="textbox half-width right" tabindex="2" required placeholder="Last Name">
             </p>
             <p class="fieldset">

             <input type="text" name="email" maxlength="30"  class="textbox full-width" tabindex="3" required placeholder="Email">
             </p>
             <p class="fieldset">
             <input type="text" name="username" maxlength="30"  class="textbox full-width" tabindex="4" required placeholder="UserName">
             </p>
             <p class="fieldset">
             <input type="password" name="password" maxlength="30"  class="textbox full-width" tabindex="5" required placeholder="Password">
             </p>
              <p class="fieldset">
             <input type="password" name="password2" maxlength="30"  class="textbox full-width" tabindex="6" required placeholder="Re-type password">
             </p>
           <input type="submit" name="Register" value="Create account" class="button" tabindex="7">

        </div>
                </form>
          </div>
        </div>
<!--/Modal SignUp-->
