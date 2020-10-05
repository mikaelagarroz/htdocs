function validateForm()
{
	var totalaBudget = document.getElementById("totalaBudget").value;
	var mat = document.getElementById("mat").value;
	var kläder = document.getElementById("kläder").value;
	var hushåll = document.getElementById("hushåll").value;
	var resekostnader = document.getElementById("resekostnader").value;
	var nöje = document.getElementById("nöje").value;
	var övrigt = document.getElementById("övrigt").value;
	//var input = Kolla input
	if((totalaBudget == "")||(mat == "")||(kläder == "")||(hushåll == "")||(resekostnader == "")||(nöje == "")||(övrigt == ""))
	{
    	alert("Vänligen fyll i en siffra i varje fält");
    	return false;
	}
	//else if(kolla om input är en siffra)
	//{
    	//alert("Du kan endast fylla i siffror i fälten");
    	//return false;
	//}
	else
	{
    	console.log("Dethär är en giltig budget");
    	
	}
}
