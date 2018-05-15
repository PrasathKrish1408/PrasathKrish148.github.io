function pwdcheck(x,y)
{
	var a=x;
	var b=y;
	var c=a.localeCompare(b);
	if(a.length<8)
	{
		window.alert("Invalid password(minimum 8 characters)");
		return false;
	}
	if(c!=0)
	{
		window.alert("The password didn't matches..");
		return false;
	}
}
function warning(a)
{
	var x=a;
	if(x.length<8)
	{
		window.alert("Warning! password must have minimum 8 characters");
	}
}