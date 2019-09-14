<?php require_once('phpmailer/src/PHPMailer.php');
      require_once('phpmailer/src/Exception.php');
      $mail = new PHPMailer\PHPMailer\PHPMailer();	

      $mail->isSMTP();
      $mail->Host = 'localhost';
      $mail->SMTPAuth = false;
      $mail->SMTPAutoTLS = false; 
      $mail->Port = 25;    // may very please check

      $mail->setFrom('hitesh.pant94@gmail.com', 'C-check Testing Okh'); 
      $mail->addAddress('hitesh.pant@digitalwebsolutions.in','testing'); 
      $mail->isHTML(true);//                                   Set email format to HTML
      $mail->Subject = 'Business Listing Details';
      $mail->Body    = "Hello Testing" ;
      foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
             {  
	 	$file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
	        $mail->addattachment($file_tmp,$file_name);
             }
      if($mail->Send()){
	echo "1";
       }else{
	echo "2";
       }


           
	
?>
