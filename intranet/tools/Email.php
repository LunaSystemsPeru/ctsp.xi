<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

class Email
{
    private $url;
    private $asunto;
    private $correo;
    private $nombre_receptor;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * @param mixed $asunto
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getNombreReceptor()
    {
        return $this->nombre_receptor;
    }

    /**
     * @param mixed $nombre_receptor
     */
    public function setNombreReceptor($nombre_receptor)
    {
        $this->nombre_receptor = $nombre_receptor;
    }

    function EnviarEmail()
    {

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        $smtp = new \PHPMailer\PHPMailer\SMTP();

        try {
            //Server settings
            $mail->SMTPDebug = $smtp::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'a2plcpnl0713.prod.iad2.secureserver.net';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'consultas@ctsprxiancash.org.pe';                     // SMTP username
            $mail->Password   = '@z_Lq6Qqf@N(';                               // SMTP password
            $mail->SMTPSecure = $mail::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('consultas@ctsprxiancash.org.pe', 'Consultas CTSP RXI Ancash');
            $mail->addAddress($this->correo, $this->nombre_receptor);     // Add a recipient
            $mail->addReplyTo('consultas@ctsprxiancash.org.pe', 'Consultas CTSP RXI Ancash');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
           // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->asunto;
            $mail->Body    = file_get_contents($this->url);
            $mail->AltBody = 'Gracias por registrarse al curso, unas horas antes del inicio, le enviaremos un correo con el acceso al curso';
            $mail->CharSet = 'UTF-8';
            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}