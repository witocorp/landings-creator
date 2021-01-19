<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'images/'; // upload directory
if($_FILES['image'])
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	// can upload same image using rand function
	$final_image = date("YmdHis").".".$ext;
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{ 
		
		$path = $path.strtolower($final_image); 
		if(move_uploaded_file($tmp,$path)) 
		{
			echo "http://".$_SERVER['SERVER_NAME']."/".$path;
			
		}else {
			echo 'error';
		}
	}
}else{
	echo 'error';
}
