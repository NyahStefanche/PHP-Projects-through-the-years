<html>
<head>
<style>
span
{
	color: gray;
}
</style>

<script>
function showHint(str)
{
	if(str.length==0)
	{
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	else
	{
		var xmlhttp=new XMLHttpRequest();
		
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","php_ajax.php?q="+str,true);
		xmlhttp.send();
	}
}
</script>
</head>
<body>
<p><b> Търсете в любимите си марки коли:</b></p>
<form>
<input type="text" onkeyup="showHint(this.value)">
</form>

<p><b> Въведената марка кола е: <span id="txtHint"></span></p>
</body>
</html>