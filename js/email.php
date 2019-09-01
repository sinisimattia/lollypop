<?php
	if ( $_POST["from"] ) $from = "From: ".$_POST["from"];
	else $from = "no-one";

	if ( $_POST["message"] ) $message = $_POST["name"]."\n\n---\n\n".$_POST["message"];
	else $from = "nothing";

	$to = get_bloginfo("admin_mail");
	$subject = "FEEDBACK#".date("d-M-Y");

	mail( $to, $subject, $message, $from );

	return "sent";
?>