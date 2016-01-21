<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Error <?php echo $code; ?></title>
	<style type="text/css">
		body {
			padding:50px;
			font-family:Arial, Helvetica, sans-serif;
			color:#777777;
			font-size:100%;
		}

		.wrapper {
			width:1080px;
			position:relative;
			margin:0 auto;
		}

		.logo {
			position:relative;
			display:block;
			text-align:center;
		}

		.logo img {
			width:300px;
		}

		.error {
			position:relative;
			width:50%;
			margin-left:auto;
			margin-right:auto;
			margin-top:40px;
			padding:10px 20px;
			border:1px solid #D48888;
			background-color:#FFEEEE;
			color:#F54242;
			text-align:center;
			border-radius:5px;
		}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="logo">
		<img src="<?php echo BASE; ?>/public/images/logo.png" />
	</div>
	<div class="error">
		<h2>ERROR <?php echo $code; ?></h2>
		<p><?php echo $message; ?></p>
	</div>
</div>
</body>
</html>