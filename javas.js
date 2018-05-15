function check(a,b,c,d)
{
var x=a;var y=b;var z=c;var w=d;
if(/\d/.test(x)||/\d/.test(y)||/\d/.test(z))
{
window.alert("only characters are allowed in Name fiels");
return false;
}
if(!(/^\d+$/.test(w)))
{
	window.alert("Characters are not allowed in Phone field");
	return false;
}
}
function name()
{
	window.alert("not opening");
	window.open("https://www.w3schools.com", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}