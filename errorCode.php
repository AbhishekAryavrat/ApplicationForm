next_step1 {
	101=Name box Empty;
	102=Name Format was Incorrect;
	103=Father Name box Empty ;
	104=Father name format is Incorrect;
	105=Mothername Name box Empty;
	106=Mother name format is Incorrect;
	107=Fill the Radio Buttons(Gender);
	108=Pincode Box is empty;
	109=Pincode format was Incorrect;
	110=Fill The Email Box;
	111=Email Format  was Incorrect;
}


next_step2{
	112=Fill Senior percentage;
	113=Incorrect Senior Percentage;
	114=Fill the Senior Board;
	115=Incorrect Board of Senior(10th);
	116=Fill Senior Secondary percentage;
	117=Incorrect Senior Secondary Percentage;
	118=Fill the Senior Secondary Board;
	119=Incorrect Board of SeniorSecondary(12th);
	120=Fill University percentage;
	121=Incorrect University Percentage;
	122=Fill the University Box;
	123=Incorrect University Format;

}

function showPreview(userImage){
	124=Image is Required;
	125=Please Select a Valid Image(Only jpeg, jpg Images);

}

function showPreview(Siganture_Image){
	126=Image is Required;
	127=Please Select a Valid Image(Only jpeg, jpg Images);
}


		<p>Father Name:<input type="text" name="fatherName" id="father_name"></p>
				<p>Mother Name:<input type="text" name="motherName" id="mother_name"></p>
				
				<!--Gender Radio Buttons-->
				<label>Gender:
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female<br>	
				</label>
				<label>Address:</label>
				<textarea name="address" rows="5" cols="15"></textarea>
				<p>Pincode<input type="text" name="pincode" id="pincode"></p>
				<p>Email Id<input type="text" name="email" id="email"></p>

				<p><input type="button" id="next_btn1" onclick="next_step1()" value="Next"></p>
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
	
		<div class="third" id="3">
		
			<!-- create photo signature box-->	
			<h2>Photo & Signature</h2>
			<div id="body-overlay">
			<!--img src="img/loading.gif" width="64px" height="64px"--></div>
					<div id="targetOuter">
						<div id="targetLayer"></div>
							<img src="img/photo.png" class="icon-choose-image">
							<!--img src="img/photo.png" class="icon-choose-image"-->
							<div class="icon-choose-image">
								<input type="file" name="userImage" id="userImage" class="inputFile" onchange="showPreview(this);" required>
							</div>
					</div>

					<div id="targetOuter1">
						<div id="targetLayer1"></div>
							<img src="img/signature.png" class="sign-choose-image">
								<div class="sign-choose-image">
									<input type="file" name="signImage" id="signImage" class="inputFile1" onchange="showPreviewSign(this);" required>
								</div>
					</div>


					<div>
						<input type="button" name="Previous2" onclick="pre_step2()" value="Previous Step" id="pre_btn2">
						<a href="formpreview.php"><input type="Submit" name="preview"  value="Submit" id="preview"  ></a>
					</div>