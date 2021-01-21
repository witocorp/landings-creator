<?php
require "phpmailer/src/PHPMailer.php";
$servername = "localhost";
$username = "root";
$password = "#Valvarez@2019?.";
$dbname = "dbs1175525";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$attachment  = '';
$sql = "SELECT * FROM email";
$result = $conn->query($sql);
$emailAdmin = "";
$emailCarbon = "";
if ($result->num_rows > 0) {
  // output data of each row
 while($row = $result->fetch_assoc()) {
    if($row["idLanding"] === "0"){
      $emailAdmin = $row["email"];
      $emailCarbon = $row["carbon"];  
      $sql2 = "SELECT * FROM emails";
    $result2 = $conn->query($sql2);
    while($row2 = $result2->fetch_assoc()) {
        $attachment  .= $row2["nombre"]."\t".$row2["apellido"]."\t".$row2["telefono"]."\t\n";
    }
    }
  }
} else {
  echo "0 results";
}
$conn->close();

$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host       = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port       = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username   = "fantasticfy@gmail.com";
//Introducimos nuestra contraseña de gmail
$mail->Password   = "46Wito74.";
//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('tucuenta@gmail.com', 'Mi nombre');
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo('osbendc@gmail.com','El de la réplica');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('hello@witocorp.com', 'El Destinatario');
//Definimos el tema del email
$mail->Subject = 'Esto es un correo de prueba';
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
//$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->AltBody = 'This is a plain-text message body';
//Enviamos el correo
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Enviado!";
}

/*
$to = $emailAdmin; 
$subject = 'Test email with attachment'; 
//create a boundary string. It must be unique 
//so we use the MD5 algorithm to generate a random hash 
$random_hash = md5(date('r', time())); 

//$headers = "From: fromEmail@test.com"; 
$headers .= "From: noreply@landingfy-creator.com" . "\r\n" .
"CC:".$emailCarbon;
//add boundary string and mime type specification 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 

//define the body of the message. 
ob_end_clean();//
ob_start(); //Turn on output buffering 
?> 
--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>" 

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/plain; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

Automatic email

--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: application/vnd.ms-excel; name="test1.xls"  
Content-Disposition: attachment  
<?php echo $attachment; 
//copy current buffer contents into $message variable and delete current output buffer 
$message = ob_get_clean(); 
//send the email 
$mail_sent = mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed"; */
?>