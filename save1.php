<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center> data sedang diproses <hr />
<table>
<?php

$email=$_GET['email'];
$fulname=$_GET['fullname'];
$username=$_GET['username'];

echo "<tr><td>E-mail</td><td>:</td><td>$email</td></tr>";
echo "<tr><td>Nama lengkap</td><td>:</td><td>$fulname</td></tr>";
echo "<tr><td>Nama akun</td><td>:</td><td>$username</td></tr>";
echo "</table><hr>";

?>
</table>
</body>
</html>
