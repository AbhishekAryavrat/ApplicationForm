function nameValidate(info)
{
	var uName = document.getElementById('unameValidate');
	var fName = document.getElementById('fNameValidate');
	var mName = document.getElementById('mNameValidate');

	var userName = document.getElementById('userName').value;
	var fatherName = document.getElementById('fatherName').value;
	var motherName = document.getElementById('motherName').value;

	if(userName === info){nameValidation(info,uName,"Name");}
	if(fatherName === info){nameValidation(info,fName,"Father Name");}
	if(motherName === info){nameValidation(info,mName,"Mother Name");}
}

function nameValidation(info,errDis,errName)
{
	try{

			if(info == 0) 
				{throw "Field name can not be empty";} 
			else{errDis.innerHTML = "";}

				let val = info.trim();
				let len = val.length;

				if(len < 2) {throw "Value is too low";}else{errDis.innerHTML = "";}
				if(len > 15) {throw "Value is too High";}else{errDis.innerHTML = "";}

				let alpha = /^[a-zA-Z\s]+$/;
				if(!info.match(alpha)) {throw "Value should be only Alphabets";}else{errDis.innerHTML = "";}
			
		}

	catch(err)
	{
		errDis.innerHTML = errName + " " + err;
	}
}