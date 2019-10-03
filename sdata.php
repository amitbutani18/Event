<?php
if(isset($_POST['check']))
{
echo "Form Submitted<br>";
echo "Name:".' '.$name=$_POST['name'];
}
$rand=substr(rand(),0,4); //only show 4 numbers
?>
<html>
<head>
<style type="text/css">
.captcha { width:60px; background-image:url(cat.png);
border: 1px solid; }
.color { color:#FF0000; }
</style>
<script type="text/javascript">
//Javascript Referesh Random String
function captch()
{
var x = document.getElementById("ran")
x.value = Math.floor((Math.random() * 10000) + 1);
}
function validation()
{
if(document.form1.name.value=="")
{
document.getElementById("name").innerHTML="Enter your Name!";
document.form1.name.focus();
return false;
}
if(document.form1.chk.value=="")
{
document.getElementById("error").innerHTML="Enter Captcha!";
document.form1.chk.focus();
return false;
}
if(document.form1.ran.value!=document.form1.chk.value)
{
document.getElementById("error").innerHTML="Captcha Not Matched!";
document.form1.chk.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>" name="form1">
<table width="400px" align="center" bgcolor="#EBEBEB">
<tr> <td>Name:</td>
<td><input type="text" name="name">
<span id="name" class="color"></span>
</td>
</tr>
<tr> <td>Enter Captcha</td> <td><input type="text" name="chk" id="chk">
<span id="error" class="color"></span>
</td>
</tr>
<tr> <td>&nbsp;</td>
<td><input type="text" value="<?=$rand?>" id="ran"
readonly="readonly" class="captcha">
<input type="button" value="Refresh" onclick="captch()" /> </td> </tr>
<tr> <td colspan="2" align="center"> <input type="submit" name="check"
onclick="return validation();">
</td>
</table>
</form>
</body>
</html>
