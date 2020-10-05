function validateForm()
{
	var totalaBudget = document.getElementById("totalaBudget").value;
	var mat = document.getElementById("mat").value;
	var kläder = document.getElementById("kläder").value;
	var hushåll = document.getElementById("hushåll").value;
	var resekostnader = document.getElementById("resekostnader").value;
	var nöje = document.getElementById("nöje").value;
	var övrigt = document.getElementById("övrigt").value;

	if((totalaBudget == "")||(mat == "")||(kläder == "")||(hushåll == "")||(resekostnader == "")||(nöje == "")||(övrigt == ""))
	{
    	alert("Vänligen fyll i en siffra i varje fält");
    	return false;
	}
	else
	{
    	console.log("Dethär är en giltig budget");
    	
	}
}
function insert(num)
{
    document.form.textview.value = document.form.textview.value + num;
}

function equal()
{ 
    var total = document.form.textview.value;
    if(total)
    {
        document.form.textview.value = eval(total);
    }
}

function regrett()
{
    var total = document.form.textview.value;
    document.form.textview.value = total.substring(0, total.lenght-1); 
}
