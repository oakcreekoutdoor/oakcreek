function validateForm()
{
	bSubmit = true;
	var arrRequiredFieldsElements = document.getElementsByClassName("requiredField");

	for(var i=0; i<arrRequiredFieldsElements.length; i++)
	{
		var el = arrRequiredFieldsElements[i];

		switch(el.tagName.toLowerCase())
		{
			case "div":
				var isOneChecked = false;

				arrFields = el.getElementsByTagName("input");

				for(var fID=0; fID<arrFields.length; fID++)
				{
					subEl = arrFields[fID];
					if (subEl.checked)
					{
						isOneChecked = true;
					}
				}

				manageError(isOneChecked, el);
				break;
			default:
				manageError(el.value, el);
		}
	}
	return bSubmit;
}

function manageError(checkState, thisEl)
{
	if(!checkState)
	{
		thisEl.className += " error";
		bSubmit = false;
	} else {
		thisEl.classList.remove("error");
	}

}


