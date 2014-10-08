<div class="module-MyAccountSignUp"> <a id="signUpLink" class="subdued" title="Sign Up" tabindex="8" href="https://www.alaskaair.com/www2/ssl/myalaskaair/myalaskaair.aspx?CurrentForm=UCMyAccountCreate&amp;lid=MyAccount:Sign Up">Join MileagePlan™</a> </div>
<h3>Sign In</h3>
<form action="https://www.alaskaair.com/www2/ssl/myalaskaair/myalaskaair.aspx?CurrentForm=UCSignInStart" method="post" role="form">
	<div class="module-MyAccountUserID">
	<div id="divUserId">
	  <!--<label for="UserId" class="left">User ID</label>-->
	  <a class="formhelp" id="forgotIdLink" title="Help Retrieving User ID" tabindex="5" href="https://www.alaskaair.com/myaccount/forgotcredentials/userid" onclick="if(s_gi){var s=s_gi('alaskacom');s.linkTrackVars='prop16';s.linkTrackEvents='None';s.prop16='MyAccount:Forgot User ID';s.tl(this,'o','MyAccount:Forgot User ID');s.prop16='';}as.authentication.forgotUserId(this.href);return false;">Forgot User ID?</a> </div>
	  <div>
	    <input class="module-myAccountInput" id="UserId" maxlength="50" autocorrect="off" tabindex="1" name="UserId" type="text" placeholder="User ID" value="">
	  </div>
	</div>
	<div class="module-MyAccountPassWord">
	  <div id="divPassword">
	    <!--<label for="Password" class="left">Password</label>-->
	    <a class="formhelp" id="forgotPasswordLink" title="Help Retrieving Password" tabindex="6" href="https://www.alaskaair.com/myaccount/forgotcredentials/password" onclick="if(s_gi){var s=s_gi('alaskacom');s.linkTrackVars='prop16';s.linkTrackEvents='None';s.prop16='MyAccount:Forgot Password';s.tl(this,'o','MyAccount:Forgot Password');s.prop16='';}as.authentication.forgotPassword(this.href);return false;">Forgot Password?</a> </div>
	    <div>
	      <input class="module-myAccountInput" id="Password" maxlength="50" tabindex="2" name="Password" type="password" autocomplete="off" placeholder="Password" value="">
	    </div>
	  </div>
	  <div class="module-MyAccountRememberMe">
	    <input id="RememberMe" name="RememberMe" type="checkbox" tabindex="4" value="true">
	    <label id="RememberMeLabel" for="RememberMe">Remember my User ID on this computer.</label>
	    <div class="clear"></div>
	  </div>
	  <div class="btn-wrapper">
	    <button id="myAccoutnSignInButton" class="btn btn-primary" tabindex="7" type="submit" value="SIGN IN">Sign In</button>
	  </div>
	  <input id="signInClient" name="signInClient" type="hidden" value="signInWidget">
	  <div class="clear"></div>
  </form>
