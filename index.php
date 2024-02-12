<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium Web">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Mail Sender</title>
</head>
<body>

	<form class="form none" method="post" action="send_email.php">


		<h1>Contact To Me</h1>

		<hr>

		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>

		<label for="email">E-mail</label>
		<input type="email" name="email" id="email" required>

		<label for="subject">Subject</label>
		<input type="text" name="subject" id="subject" required>

		<label for="message">Message</label>
		<textarea type="text" name="message" id="message" required></textarea>

		<button>Send Message</button>

	</form>
	
	<div class="start">

		<button class="start-btn">Go Contact Form</button>

	</div>

<script src="index.js"></script>
</body>
</html>