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
// }



var name = "",count=1,validCount=0;

function nameValidate(info)
{
	if(info == 'userName'){nameValidation(info,"unameValidate","Name");}
	if(info == 'fatherName'){nameValidation(info,"fNameValidate","Father Name");}
	if(info == 'motherName'){nameValidation(info,"mNameValidate","Mother Name");}
}

function nameValidation(info,errDis,errName)
{
	try{
			
			let name = document.getElementsByName(info)[0].value;

			if(name == 0) 
				{throw "Field name can not be empty";} 
			else{errDis.innerHTML = "";}

				let val = name.trim();
				let len = val.length;

				if(len < 2) {throw "Value is too low";}else{document.getElementById(errDis).innerHTML = "";}
				if(len > 15) {throw "Value is too High";}else{document.getElementById(errDis).innerHTML = "";}

				let alpha = /^[a-zA-Z\s]+$/;
				if(!name.match(alpha)) {throw "Value should be only Alphabets";}
				else{document.getElementById(errDis).innerHTML = "";}

				
			
		}
	catch(err)
	{
		document.getElementById(errDis).innerHTML = errName + " " + err;
		
	}
}


function Validate(info)
{	
	let regEx1 = /^\d{6}$/;
	let regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(info === 'email'){emaPinValid(info,"emailValidation","Email ID",regEx);}
	if(info === 'pincode'){emaPinValid(info,"pincodeValidation","Pincode",regEx1);}
}

function emaPinValid (info,errDis,errName,expr)
{
	let name = document.getElementsByName(info)[0].value;
	try
	{if(!name.match(expr)){throw "Incorrect Format of ";}
	else{document.getElementById(errDis).innerHTML = "";}}
	
	catch(err)
	{
		document.getElementById(errDis).innerHTML = err + errName;
		
	}
}

function genderValidate()
{
	var radio_check = document.getElementsByName("gender");
	let errDis = "genderValidation";
	var genCount =1;
	try{if(radio_check[0].checked == false && radio_check[1].checked == false ){genCount++; throw "Fill the Gender Buttons";}
		else{document.getElementById(errDis).innerHTML = "";genCount = 0;}
		}
	catch(err)
	{
		document.getElementById(errDis).innerHTML = err ;
	}

	return genCount;
}


function nextStep()
{

	var genResult = genderValidate();
	var result = countVal();
	if(result == 5){count = 0;validCount=0;}else{validCount = 0;}

	if(genResult == 0 && count == 0)
	{
		document.getElementById('1').style.display = "block";
		document.getElementById('2').style.display = "block";
		document.getElementById('3').style.display = "none";
	}
	else
	{
		// document.getElementById('1').style.display = "block";
		// document.getElementById('2').style.display = "none";
		// document.getElementById('3').style.display = "none";
		alert("Please Fill the All Details");
	}
}

function countVal()
{
	var x = document.getElementsByName('valid').length;
	for(let i =0;i<x;i++)
	{
		if(document.getElementsByName('valid')[i].textContent == "")
		{
			validCount++;
		}
	}

	return validCount;
}



		// document.getElementById('1').style.display = "block";
		// document.getElementById('2').style.display = "block";
		// document.getElementById('3').style.display = "none";