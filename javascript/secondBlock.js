var name ="", val = 1, eduCount = 0;

function percentValidate(info)
{
	// alert(info);
	if(info == 'senior'){percentValidation(info, "sscValidate", "SSC");}
	if(info == 'secondary'){percentValidation(info, "hscValidate", "HSE");}
	if(info == 'university'){percentValidation(info, "uniValidate", "University");}
}

function percentValidation(info, errDis, errName)
{
	//alert(errDis);
	try
	{
		let per = document.getElementsByName(info)[0].value;

		let percentExp =  /(^100(\.0{1,2})?$)|(^([1-9]([0-9])?|0)(\.[0-9]{1,2})?$)/i;
		if(!per.match(percentExp)) {throw "Incorrect Percentage of";}
		else{document.getElementById(errDis).innerHTML = "";}
	}
	catch(err)
	{
		document.getElementById(errDis).innerHTML = err + " " + errName;
	}
}

function uniValidate(info)
	{
		if(info == 'uniBoard'){uniValidation(info,"uniBoardValidate", "University Board");}
	}

function uniValidation(info,errDis,errName)
{
	try{
			
			let name = document.getElementsByName(info)[0].value;

			if(name == 0) 
				{throw " Field can not be empty";} 
			else{document.getElementById(errDis).innerHTML = "";}

				let val = name.trim();
				let len = val.length;

				if(len < 2) {throw "Value is too low";}else{document.getElementById(errDis).innerHTML = "";}
				if(len > 40) {throw "Value is too High";}else{document.getElementById(errDis).innerHTML = "";}

				let alpha = /^[a-zA-Z\s]+$/;
				if(!name.match(alpha)) {throw "Value should be only Alphabets";}
				else{document.getElementById(errDis).innerHTML = "";}		
		}
	catch(err)
	{
		document.getElementById(errDis).innerHTML = errName + " " + err;		
	}
}

function pre_step1()
{
	document.getElementById('1').style.display = "block";
	document.getElementById('2').style.display = "none";
	document.getElementById('3').style.display = "none";
	count = 1;
}

function nextStep2()
{
	var result = countValidate();


	if(result == 6)
		{
			val = 0;
			eduCount = 0;
		}
		else
		{
			eduCount=0;
		}
	

	if(val == 0 )
	{
		document.getElementById('1').style.display = "block";
		document.getElementById('2').style.display = "block";
		document.getElementById('3').style.display = "block";
	}
	else
	{
		alert("Please Fill all the Details");
	}
}


function countValidate()
{
	var x = document.getElementsByName('education').length;
	for(let i =0;i<x;i++)
	{
		if(document.getElementsByName('education')[i].textContent == "")
		{
			eduCount++;
		}
	}
	return eduCount;
}