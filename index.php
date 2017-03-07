<?php
header("Content-type=text/html; charset=utf-8");
if($link=mysqli_connect("127.0.0.1","root","855976","t"))
{
echo "welcome to the Message Board      =_=";
}
else
{
echo "fail";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<title>login in</title>
</head>
<body >
<table width="678" align="center">
<tr>
<td colspan="2"><h1>LOGIN IN</h1></td>
</tr>
<tr>
<p align="left">
<td width="586"><a href="index.php">First Page</a> || <a href="liuyan.php">Message Board</a></td>
</p></tr>
</table>
<p>&nbsp;</p>
<table align="center" border="5">
<td align="center">
<form name="form1" method="post" action="test2.php">
<label for="textfield"></label>
<p>&nbsp</p>
<p>id:<input type="text" name="id" id="id"></p>
<p>password:<input type="password" name="password" id="password"></p>
<p>remember</p>
<input type="checkbox"checked>
<p>
<input type="submit" name="button" id="button" value="submit">
<input type="reset" name="button2" id="button2" value="retry">
</p>
</form>
</table>
</font>
<p align="center" ><font-size="20px"><a href="tourist.php">click to enter as a tourist</a>||<a href="show.php">show board</a></font></p>
</body>
</html>
