<html>
<head>
<title>Data-pasien
</title>
</head>
<body>
<?php

mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("login");

session_start();

$status=$_SESSION['status'];
$type=$_SESSION['type'];
$username=$_SESSION['username'];

if($status!="loggedin"){
	session_destroy();
	header("location:index.php");

}
?>
<?php
if(isset($_GET['del'])){
	$del=$_GET['del'];
	mysql_query("delete from pasienbaru where nama='$del'");

}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="wrapper">
<div id="head">
</div>
<div id="foot">
<div id="profile">
</div>
<a href="home-office.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>

<H5 class="judul"><center>Data Pasien Kinik ABC
</div>
<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu.php");

?>
</div>
<div id="con">
<br>
<form name="submit" method="post">
				<table>
					<tr>
			
						<td><h6 class="jud">Nama</td> 
						<td><input class="input" type="text" placeholder="Nama Lengkap" name="namalengkap" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
					</tr>
						<td><h6 class="jud">Alamat</td>
						<td><input class="input" type="alamat" placeholder="Alamat" name="alamat" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
					</tr>
						<td><h6 class="jud">Tempat tanggal lahir </td>
						<td><input class="input" type="text" placeholder=".../DD/MM/YYYY" name="lahir" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
						</tr>
						<td><h6 class="jud">Gender</td>
						<td><input class="input" type="text"  name="gender" placeholder="P/L" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
					</tr>
						<td><h6 class="jud">Golongan Darah </td>
						<td><input class="input" type="text" placeholder="A/O/B/AB" name="gol" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
						<tr>
						<td><h6 class="jud">Penyakit</td> 
						<td><input class="input" type="text" placeholder="penyakit" name="penderita" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
					</tr>
						<td><h6 class="jud">Keluhan</td> 
						<td><input class="input" type="text" placeholder="keluhan" name="keluhan" required style="width:250;height:40;margin-left:10;border-radius:10px;padding-left:10;"></h6></td>
					</tr>			
			<td colspan="5"><input class="submit" type="submit" name="baru" value="Submit" style="width:200;margin-left:250;height:35;"/></td></tr>

</table>
</form>
<img src="img/office.png" width="400" height="450" style="margin-left:600;margin-top:-300;">
<?php
	include("baru.php");
	?>
		</div>

</div>
<div id="kotakkanan">
</div>
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:600;
margin-top:-30;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalarang | 2014-2015
</div>
</body>
</html>