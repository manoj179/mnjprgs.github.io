
<?php 

if(isset($_POST['resb']))
{
	$res=$_POST['dis'];
	$res=eval('return '.$res.';');
}
?>


<html>
<head>
<title> Calculator </title>
<style>
td,tr
{
 border-style:none;
}
input{
    width: 100%;
    display: inline-flex;
    border-style: none;
    font-size: 15pt;
    background-color: #0f0fe0d1;
    color: white;
}
</style>
<body>
<h1 align="center"> Simple Calculator </h1>
<hr color="red"/>
<form name="calsi" method="post">
<table align="center">
<tr>
<td colspan="4" style="border:1px solid;"><input type="text" name="dis" value="<?php if(isset($res)){echo $res;}?>" style="background-color:white;color:black;"/></td>
</tr>

<tr>
	<td><input type="button" value="1" onclick="calsi.dis.value+='1'"/></td>
	<td><input type="button" value="2" onclick="calsi.dis.value+='2'"/></td>
	<td><input type="button" value="3" onclick="calsi.dis.value+='3'"/></td>
	<td><input type="button" value="+" onclick="calsi.dis.value+='+'"/></td>
</tr>
<tr>
	<td><input type="button" value="4" onclick="calsi.dis.value+='4'"/></td>
	<td><input type="button" value="5" onclick="calsi.dis.value+='5'"/></td>
	<td><input type="button" value="6" onclick="calsi.dis.value+='6'"/></td>
	<td><input type="button" value="-" onclick="calsi.dis.value+='-'"/></td>
</tr>
<tr>
	<td><input type="button" value="7" onclick="calsi.dis.value+='7'"/></td>
	<td><input type="button" value="8" onclick="calsi.dis.value+='8'"/></td>
	<td><input type="button" value="9" onclick="calsi.dis.value+='9'"/></td>
	<td><input type="button" value="*" onclick="calsi.dis.value+='*'"/></td>
</tr>

<tr>
	<td><input type="button" value="C" onclick="calsi.dis.value+=''"></td>
	<td><input type="button" value="0" onclick="calsi.dis.value+='0'"/></td>
	<td><input type="submit" value="=" name="resb"></td>
	<td><input type="button" value="/" onclick="calsi.dis.value+='/'"/></td>
</tr>
</table>
</form>
</body>
</head>
</html>
