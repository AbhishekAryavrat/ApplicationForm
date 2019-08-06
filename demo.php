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
					<input type="text" name="userName" id="user_Name"  onchange="nameValidate(name);">
					<p name = "valid" id="unameValidate"></p>
					
					<label for ="fatherName">Father Name:</label>
					<input type="text" name="fatherName" id="father_Name" onchange="nameValidate(name);">
					<p name = "valid" id= "fNameValidate"></p>

					<label for ="motherName">Mother Name:</label>
					<input type="text" name="motherName" id="mother_Name" onchange="nameValidate(name);">
					<p name = "valid" id= "mNameValidate"></p>

					<label for="gender">Gender:
						<input type="radio" name="gender" id=male value="male">Male
						<input type="radio" name="gender" id= female  value= "female">Female
						<br>
					</label>
					<p id= "genderValidation"></p>

					<label>Address:</label>
					<textarea name="Address" rows="5" cols="15"></textarea>
					<br><br>

					<label for="pincode">Pincode</label>
					<input type="text" name="pincode" id="_pincode" onchange="Validate(name);">
					<p name = "valid" id="pincodeValidation"></p>

					<label for="email">Email ID</label>
					<input type="text" name="email" id="_email" onchange="Validate(name);">
					<p name = "valid" id="emailValidation">
				</div>
				<input type="button" id="next_btn1" onclick="nextStep();" value="Next">


		</div>
		<div class="second" id="2">
			
			<!-- create Educational Details box-->
			<h2>Educational Details</h2>
				<p>Senior(10th%)<input type="text" name="senior_percentage" placeholder="Percentage" id="senior_percentage" ></p>
				<p>Board:<input type="text" name="seniorBoard"  onkeyup="board(this)" value="" id="seniorBoard"></p>
				<p>Senior Seconadry(12th%):<input type="text" name="secondary_percentage" placeholder="Percentage" id="secondary_percentage"></p>
				<p>Board:<input type="text" name="secondaryBoard" onkeyup="board(this)" value="" id="secondaryBoard"></p>
			
					<label>Graduation Course:</label>
					<!--create drop down list-->
					<select name="graduation_course">
						<option value="BCA">BCA</option>
						<option value="BBA">BBA</option>
						<option value="BBA">B.COM</option>
						<option value="BBA">B.A</option>
						<option value="BBA">B.TECH</option>			
					</select>
						<p>Percentage:<input type="text" name="university_percentage" id="university_percentage" placeholder="Percentage">
						<p>University/Board:<input type="text" name="university"  onkeyup="board(this)" value="" id="university"><br>
						<input type="button" name="Previous1" onclick="pre_step1()" id="pre_btn1" value="Previous step">
						<input type="button" name="Next" onclick="next_step2()" id="next_btn2" value="Next step">		
		</div>




		</form>
	</body>
</html>
