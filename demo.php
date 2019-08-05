<!--  <?php

 //session_start();
//if(isset($_SESSION['$uname']))
 ?> -->


<!DOCTYPE html>
 <html>
	<head>
		<title>application form</title>
			<!--Link All File-->
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script type="text/javascript" src="javascript/demo.js"></script>
			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
	</head>

	<body>
		<!--Create Application Form-->
		<h1> Application Form</h1>
		<form action="form.php"  method="POST" id="uploadForm" enctype="multipart/form-data">
		<div class="first" id="1">
			<!--Personal Details Box-->
				<h2>Personal details</h2>
				<div>
					<label for ="userName">Name:</label>
					<input type="text" name="userName" id="userName"  onchange="nameValidate(value);">
					<p id="unameValidate"></p>
					
					<label for ="fatherName">Father Name:</label>
					<input type="text" name="fatherName" id="fatherName" onchange="nameValidate(value);">
					<p id= "fNameValidate"></p>

					<label for ="motherName">Mother Name:</label>
					<input type="text" name="motherName" id="motherName" onchange="nameValidate(value);">
					<p id= "mNameValidate"></p>
				</div>
		</div>



		</form>
	</body>
</html>
