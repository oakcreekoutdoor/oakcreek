function validateForm()
{
	var arrRequiredFieldsElements = document.getElementsByClassName("requiredField");

	for(var i=0; i<arrRequiredFieldsElements.length; i++)
	{
		var el = arrRequiredFieldsElements[i];
		if(!el.value)
		{
			el.className += " error";
		} else {
			el.classList.exists("error");
		}
	}
}