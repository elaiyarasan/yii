function alerta(check_val,Desc)
{
	if(Desc=='ch')
	{
	// debugger
 
// alert(a+b);
if(check_val=='PLANT')
{

 document.getElementById("source").style.display="block";  
}
else if(check_val=='NEWL')
{
	// alert('dfg');
 document.getElementById("source").style.display="none";  
}
}
var Url="http://localhost/test/index.php/sort/time";
console.log(Url);
var ob=
{
	'id':1
	}

	$.ajax({
		url:Url,
		type:'POST',
		data:ob,
		success:ge(),
		crossDomain: true

	});

}
	
	// $(document).ready(function(){

	// });
