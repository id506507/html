<?php
  //設定
  $to_name = "=?utf-8?B?" . base64_encode('id506507@gmail.com') . "?=";
  $to_email = "=?utf-8?B?" . base64_encode('Chan Tsz Ching') . "?=";
  $from_name = "=?utf-8?B?" . base64_encode($_POST["name"]) . "?=";
  $from_email = $_POST["email"];	
  $to_name = $to_name ;
  $to_email = $to_email ;
  $format = @$_POST["format"];
  $subject = "=?utf-8?B?" . base64_encode($_POST["subject"]) . "?=";
  $message = $_POST["content"];
  $mime_boundary = md5(uniqid(mt_rand(), TRUE));
	//郵件標頭
  $header  = "From: $from_name<$from_email>\r\n";
  $header .= "To: $to_name<$to_email>\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Type: multipart/mixed; boundary=". $mime_boundary . "\r\n";
	
  //建立郵件內容
  $content  = "This is a multi-part message in MIME format.\r\n";
  $content .= "--$mime_boundary\r\n";
  $content .= "Content-Type: text/$format; charset=utf-8\r\n";
  $content .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
  $content .= "$message\r\n";
  $content .= "--$mime_boundary\r\n";		

  //一切無誤時傳送郵件
  mail($to_email, $subject, $content, $header);
  echo "郵件送出成功！"
?>