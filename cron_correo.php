<?php
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
echo $attachment;
echo "<br>";
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

Email Text here

--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: application/vnd.ms-excel; name="test1.xls"  
Content-Disposition: attachment  
<?php echo $attachment; 
//copy current buffer contents into $message variable and delete current output buffer 
$message = ob_get_clean(); 
//send the email 
$mail_sent = mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed"; 
?>