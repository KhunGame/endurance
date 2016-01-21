<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Endurance 1.0 - Easy MVC</title>
	<style type="text/css">
		body {
			padding:50px;
			font-family:Arial, Helvetica, sans-serif;
			color:#777777;
			font-size:100%;
		}

		.wrapper {
			width:1080px;
			margin:0 auto;
			position:relative;
		}

		.quote {
			width:45%;
			margin:0 auto;
			padding:20px;
			margin-top:30px;
			border:1px solid #AAC0CA;
			background-color:#EEF0FF;
			border-radius:5px;
			color:#31708f;
			font-size:0.9em;
			text-align:center;
		}

		.logo {
			position:relative;
			display:block;
			text-align:center;
		}

		.logo img {
			margin:0 auto;
			width:400px;
		}

		.credits {
			width:45%;
			margin:0 auto;
			padding:10px 20px;
			margin-top:30px;
			border:1px solid #75A088;
			background-color:#E6FBDB;
			border-radius:5px;
			color:#397939;
			font-size:0.9em;
			text-align:center;
		}

		.credits ul {
			list-style:none;
		}

		.credits ul > li {
			margin-top:5px;
		}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="logo"><img src="<?php echo BASE; ?>public/images/logo.png" /></div>
	<div class="quote">
		<p>Welcome to <strong>Endurance</strong>, it is very nice to see you trying our framework</p>
		<p>To see configuration file, please go to <strong>app/settings/config.php</strong> file</p>
	</div>
	<div class="credits">
		<h3>Developers & Credits</h3>
		<h5>Developed by Lunarmind Intelligence Systems</h5>
		<h5>All rights belong to Martin De Tour - School of Management, Assumption University of Thailand(ABAC)</h5>
		<ul>
			<li>Chief in Command : Pattarin Roongsubsin</li>
			<li>Project Manager : Kittipan Sirinimnualkul</li>
			<li>Developers : Chatthana Janethankarn</li>
			<li>Research & Planning : Arkadech Lomthampinij</li>
			<li>Art Director & Concept Editor : Emily Freija</li>
		</ul>
	</div>
</div>
</body>
</html>