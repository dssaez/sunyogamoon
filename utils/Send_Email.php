<?php
if (isset($_POST['TokenCheck']) && isset($_POST['TokenCheck2']))
{

        $token1 = $_POST['TokenCheck'];
        $token2 = $_POST['TokenCheck2'];
        if(isset($_SERVER['HTTP_REFERER'])) {
            $resultado = strpos($_SERVER['HTTP_REFERER'], DOMAIN);
        }

        if ($token1 == $_SESSION['Token1'] && $token2 == $_SESSION['Token2'] && $resultado !== FALSE)
                {
                        // Seteamos los token a 0 para que no se envíen más formularios repetidos
                        $_SESSION['Token1'] = "0";
                        $_SESSION['Token2'] = "0";

                        $Name = $_POST['Name'];
                        $Email_From = $_POST['Email1'];

                        if ($Name != "" && comprobar_email($Email_From))
                        {

                                $body = $_POST['Algo'];
                                $Email_To = "daniel@indanielweb.com";

                                $body = $Name." - ".$Email_From."<br><br>".$body;
                                $Box_Manager['Email_Sent']['Name'] = $Name;
                                $Box_Manager['Email_Sent']['Email'] = $Email_From;

                                /**
                                 * This example shows settings to use when sending via Google's Gmail servers.
                                 */

                                //SMTP needs accurate times, and the PHP time zone MUST be set
                                //This should be done in your php.ini, but this is how to do it if you don't have access to that
                                date_default_timezone_set('Etc/UTC');

                                require '../vendor/PHPMailer-master/PHPMailerAutoload.php';

                                //Create a new PHPMailer instance
                                $mail = new PHPMailer;

                                //Tell PHPMailer to use SMTP
                                //$mail->isSMTP();

                                //Enable SMTP debugging
                                // 0 = off (for production use)
                                // 1 = client messages
                                // 2 = client and server messages
                                $mail->SMTPDebug = 0;

                                //Ask for HTML-friendly debug output
                                $mail->Debugoutput = 'html';

                                //Set the hostname of the mail server
                                $mail->Host = 'smtp.1and1.es';
                                // use
                                // $mail->Host = gethostbyname('smtp.gmail.com');
                                // if your network does not support SMTP over IPv6

                                //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                                $mail->Port = 587;

                                //Set the encryption system to use - ssl (deprecated) or tls
                                $mail->SMTPSecure = 'tls';

                                //Whether to use SMTP authentication
                                $mail->SMTPAuth = true;

                                //Username to use for SMTP authentication - use full email address for gmail
                                $mail->Username = "daniel@indanielweb.com";

                                //Password to use for SMTP authentication
                                $mail->Password = "kl4n3t!t!";

                                //Set who the message is to be sent from
                                $mail->setFrom($Email_From, $Name);

                                //Set an alternative reply-to address
                                $mail->addReplyTo($Email_From, $Name);

                                //Set who the message is to be sent to
                                $mail->addAddress($Email_To, 'indanielweb');

                                //Set the subject line
                                $mail->Subject = $Name.' te ha enviado un mensaje desde indanielweb';

                                //Read an HTML message body from an external file, convert referenced images to embedded,
                                //convert HTML into a basic plain-text alternative body
                                $mail->msgHTML($body);

                                //send the message, check for errors
                                if (!$mail->send()) {
                                    echo "Mailer Error: " . $mail->ErrorInfo;

                                }
                                else{
                                        // Cargamos el BoxManager para que se muestre el mensaje de bienvenida
                                        $Box_Manager['Email_Sent']['Name'] = $Name;
                                        $Box_Manager['Email_Sent']['Email'] = $Email_From;
                                }
                        }

                }
}

?>
