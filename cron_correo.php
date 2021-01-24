<?php
require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");
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
$attachment2  = '';
$attachmentH = utf8_decode("Prénom\tNom\tTéléphone\tEmail\tAdresse\tDomaine\tDate dexpédition\tDate de naissance\tOptions\t\n");
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
      $dominio = ""; 
      $sql2 = "SELECT * FROM emails WHERE fecha = '".date("Y-m-j", strtotime( '-1 days' ) )."'";
      $result2 = $conn->query($sql2);
      while($row2 = $result2->fetch_assoc()) {
          $sqlNl = "SELECT * FROM landing WHERE id = ".$row2["idLanding"];
          $rNl = $conn->query($sqlNl);
          while($rowNl = $rNl->fetch_assoc()) {
              $dominio = $rowNl["dominio"];
          }
          $attachment  .= $row2["nombre"]."\t".$row2["apellido"]."\t".$row2["telefono"]."\t".$row2["email"]."\t".$row2["direccion"]."\t".$dominio."\t".$row2["fecha"]."\t".$row2["fnacimiento"]."\t".$row2["opciones"]."\t\n";
      } 
    }else{
      $attachment2  = '';
      $dominio = ""; 
      $emailL = $row["email"];
      $emailLc = $row["carbon"];
      $sql3 = "SELECT * FROM emails WHERE idLanding = ".$row["idLanding"]." AND fecha = '".date("Y-m-j", strtotime( '-1 days' ) )."'";
      $result3 = $conn->query($sql3);
      $dominio = $conn->query("SELECT dominio FROM landing WHERE id = ".$row["idLanding"])->fetch_object()->dominio;
      while($row3 = $result3->fetch_assoc()) {
          $rNl = $conn->query($sqlNl);
          $attachment2  .= $row3["nombre"]."\t".$row3["apellido"]."\t".$row3["telefono"]."\t".$row3["email"]."\t".$row3["direccion"]."\t".$dominio."\t".$row3["fecha"]."\t".$row3["fnacimiento"]."\t".$row3["opciones"]."\t\n";
      }
      if($attachment2  !== ''){
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "fantasticfy@gmail.com";
        $mail->Password = "46Wito74.";
        $mail->SetFrom("noreply@landingfy-creator.com");
        $mail->AddStringAttachment($attachmentH. "" .$attachment2, 'landing_emails.xls', 'base64', 'application/vnd.ms-excel');
        $mail->Subject = "Emails list: " .$dominio;
        $mail->Body = "Emails list";
        $mail->AddAddress($emailL);
        $mail->addCC($emailLc);
         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }
      }
    }
      
      
  }
} else {
  echo "0 results";
}
$conn->close();
if($attachment  !== ''){
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "fantasticfy@gmail.com";
  $mail->Password = "46Wito74.";
  $mail->SetFrom("noreply@landingfy-creator.com");
  $mail->AddStringAttachment($attachmentH. "" .$attachment, 'emails_list.xls', 'base64', 'application/vnd.ms-excel');
  $mail->Subject = "Emails list";
  $mail->Body = "Emails list";
  $mail->AddAddress($emailAdmin);
  $mail->addCC($emailCarbon);
   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Message has been sent";
   }
}
?>
