function validation(){
	if(document.myform.user.value.length<=3)
	{
		alert("Please enter a username with more than 4 letters");
	}
	if(document.myform.mail.value.length<=6)
	{
		alert("Please enter an correct email");
	}
	if(document.myform.Pass.value.length<=5)
	{
		alert("Please enter a password with more than 5 characters");
	}
	if(!document.myform.check.checked)
	{
		alert("You must agree to terms and conditions")
	}
	else
		alert("Welcome on board");
}