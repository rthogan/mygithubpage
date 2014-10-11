<!DOCTYPE html>
<html>

<head>
	<title>PedalTime</title>
	
	<meta http-equiv="content-type" content="text/html” charset=“utf-8" />
	<meta name="robots" content="index, follow" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
	<style>
	html, body{
		margin:0;
		padding:0;
	}
	#main{
		margin:0;
		padding:0;
		height:100vh;
		width:100vw;
		background:#199355;
		text-align:center;
	}
	#main h4{
		margin:0;
		padding:10vh 0 0 0;
		font-family:raleway;
		font-size:2.5vw;
		color:white;
	}
	#main input{
		font-family:"Open Sans", sans-serif;
		font-size:1vw;
		width:20vw;
		border:.25vw solid lightgrey;
		padding:1vw;
		border-radius:.2vw;
	}
	#main input:active{
		
	}
	#main input:focus{
		
	}
	#main button{
		color:white;
		font-family:"Open Sans", sans-serif;
		font-size:1vw;
		border:0;
		padding:1.2vw 2.2vw .8vw 2.2vw;
		border-radius:.2vw;
		background:orange;
		border-bottom:.4vw solid darkorange;
		opacity:.9;
	}
	</style>

	<!-- Load JQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	
	<script>
	$(document).ready(function() {
		$('#main button').mouseenter(function() {
			$(this).fadeTo('slow', 1);
		});
		$('#main button').mouseleave(function() {
			$(this).fadeTo('slow', .9);
		});
	});
	</script>
</head>

<body>
	
	<?php
		
	$to = "hogancompany@gmail.com";
	$subject = "PedalTime";
	$message = $_POST['email'];
	$from = "info@pedalti.me";
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (strlen($message)<1) {
			
		} else {
			mail($to, $subject, $message, $from);
		}
	}
	?>
	
	<div id='main' class='main'>
		
		<h4>
			Something cool will be here soon.
		</h4>
		
		<p id='form'>
			<form method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<input id='email' name='email' placeholder='Enter your email to receive updates'/> <button type='submit'>Submit</button>
		</p>
	</div>
