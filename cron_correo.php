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
$mail->AddStringAttachment($attachment, 'your-csv-file.xls', 'base64', 'application/vnd.ms-excel');
$mail->Subject = "Emails list";
$mail->Body = "Emails list";
$mail->AddAddress($emailAdmin);
$mail->addCC($emailCarbon);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }


?>