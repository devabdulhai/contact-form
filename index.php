<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Form</title>

		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>


		<div class="container">

			<h1>Contact Us</h1>

				<form action="<?php echo $_SERVER['PHP_SELP'];?>" method="POST" >

				<div class="form">

					<!-- <h1>Contact Form</h1> -->

					<label>Full Name</label>
					<input type="text" name="name" placeholder="Your Ful Name"
					value="<?php if(isset($name)) echo $name ?>">

					<span>

						<?php if(isset($error['name'])){

							echo $error['name'];
						}


						?>

					</span>

				</div>

				<div class="form">

					<label>Subject</label>
					<input type="text" name="subject" placeholder="Subject" value="<?php if(isset($subject)) echo $subject?>">

					<span>

						<?php 

						if(isset($error['subject'])){

							echo $error['subject'];
						}


						?>


					</span>




				</div>


				<div class="form">

					<label>Email</label>
					<input type="email" name="email" placeholder="Your Email" value="<?php if(isset($email)) echo $email?>">

					<span>

						<?php 

						if(isset($error['email'])){

							echo $error['email'];
						}


						?>


					</span>




				</div>

				<div class="form">

					<label>Message</label>
					<textarea name="message" placeholder="Message" value="<?php if(isset($message)) echo $message?>"></textarea>

					<span>

						<?php 

						if(isset($error['message'])){

							echo $error['message'];
						}


						?>


					</span>




				</div>

				<div class="form">

					<input type="submit" name="button" value="Send Your Message">

				</div>

				


			</form>

			<?php 


				if(isset($_POST['button'])){

					$name = $_POST['name'];
					$subject = $_POST['subject'];
					$email = $_POST['email'];
					$message = $_POST['message'];

				}

				// Error checking


				$error=[];

				if(empty($_POST['name'])){
					$error['name'] = 'Insert Your Name';
				}
				if(empty($_POST['subject'])){
					$error['subject'] = 'Insert Your Subject';
				}
				if(empty($_POST['email'])){
					$error['email'] = 'Insert Your Email';
				}
				if(empty($_POST['message'])){
					$error['message'] = 'Insert Your Message';
				}

				// Mail

				$to = 'abdulhaibinamzad@gmail.com';
				$from = 'Form'. $email;
				$subject = $subject;
				$body = 'Name: '. $name . 'Subject: '. $subject 'Email: '. $email. 'Message: '.$message;


				//checking

				$check = mail($to, $from, $body);
				if($check == true){

					echo 'Message Sent Successfully';
				}else{

					echo 'Message not Sent';

				}










			 ?>


		</div>



	</body>
</html>