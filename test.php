<?php
$attachment  = "testdata1 \t testdata2 \t testdata3 \t \n testdata1 \t testdata2 \t testdata3 \t ";

$to = 'osbendc@gmail.com'; 
$subject = 'Test email with attachment'; 

//create a boundary string. It must be unique 
//so we use the MD5 algorithm to generate a random hash 
$random_hash = md5(date('r', time())); 

$headers = "From: fromEmail@test.com"; 
//add boundary string and mime type specification 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 

//define the body of the message. 
ob_start(); //Turn on output buffering 
?> 
--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>" 

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/plain; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

Email Text here

--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: application/ms-excel; name="test.xls"  
Content-Disposition: attachment  
<?php echo $attachment; 
//copy current buffer contents into $message variable and delete current output buffer 
$message = ob_get_clean(); 
//send the email 
$mail_sent = mail( $to, $subject, $message, $headers ); 
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed"; 
?>