<!-- next_step1 {
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


// 

// var name = "",count=1;

// function nameValidate(info)
// {
// 	if(info == 'userName'){nameValidation(info,"unameValidate","Name");}
// 	if(info == 'fatherName'){nameValidation(info,"fNameValidate","Father Name");}
// 	if(info == 'motherName'){nameValidation(info,"mNameValidate","Mother Name");}
// }

// function nameValidation(info,errDis,errName)
// {
// 	try{
			
// 			let name = document.getElementsByName(info)[0].value;

// 			if(name == 0) 
// 				{throw "Field name can not be empty";} 
// 			else{errDis.innerHTML = "";trydemo(errDis);}

// 				let val = name.trim();
// 				let len = val.length;

// 				if(len < 2) {throw "Value is too low";}else{document.getElementById(errDis).innerHTML = "";trydemo(errDis);}
// 				if(len > 15) {throw "Value is too High";}else{document.getElementById(errDis).innerHTML = "";trydemo(errDis);}

// 				let alpha = /^[a-zA-Z\s]+$/;
// 				if(!name.match(alpha)) {throw "Value should be only Alphabets";}
// 				else{document.getElementById(errDis).innerHTML = "";trydemo(errDis);}

				
			
// 		}
// 	catch(err)
// 	{
// 		document.getElementById(errDis).innerHTML = errName + " " + err;
// 		trydemo(errDis);
// 	}
// }


// function Validate(info)
// {	
// 	let regEx1 = /^\d{6}$/;
// 	let regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// 	if(info === 'email'){emaPinValid(info,"emailValidation","Email ID",regEx);}
// 	if(info === 'pincode'){emaPinValid(info,"pincodeValidation","Pincode",regEx1);}
// }

// function emaPinValid (info,errDis,errName,expr)
// {
// 	let name = document.getElementsByName(info)[0].value;
// 	try
// 	{if(!name.match(expr)){throw "Incorrect Format of ";}
// 	else{document.getElementById(errDis).innerHTML = "";trydemo(errDis);}}
	
// 	catch(err)
// 	{
// 		document.getElementById(errDis).innerHTML = err + errName;
// 		trydemo(errDis);
// 	}
// }

// function trydemo(errDis)
// {
// 	// var value1 = document.getElementById(errDis).textContent;
// 	if(document.getElementById(errDis).textContent == ""){count = 0;}
// 	else{count++;}
// }


// function genderValidate()
// {
// 	var radio_check = document.getElementsByName("gender");
// 	let errDis = "genderValidation";
// 	var genCount =1;
// 	try{if(radio_check[0].checked == false && radio_check[1].checked == false ){genCount++; throw "Fill the Gender Buttons";}
// 		else{document.getElementById(errDis).innerHTML = "";genCount = 0;}
// 		}
// 	catch(err)
// 	{
// 		document.getElementById(errDis).innerHTML = err ;
// 	}

// 	return genCount;
// }

// function nextStep()
// {

// 	var genCount = genderValidate();

// 	if(count == 0 && genCount == 0)
// 	{
// 		document.getElementById('1').style.display = "block";
// 		document.getElementById('2').style.display = "block";
// 		document.getElementById('3').style.display = "none";
// 	}
// } -->