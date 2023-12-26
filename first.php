
<html>
<title> "login page"  </title>
<body bgcolor="pink">

<?php

include'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
date_default_timezone_set('Asia/Kolkata');
$sql = "SELECT name FROM firm";
$result = $conn->query($sql);
$k=0;
$rg=0;
while($row = $result->fetch_assoc())  
  {
	  $k=$k+1;
      if ($k==1)
	  	$N1=$row['name'];
		
      if ($k==2)
	  	$N2=$row['name'];

      if ($k==3)
	  	$N3=$row['name'];
 	  
      if ($k==4)
		$N4=$row['name'];
  }
  
  //$rg=$_POST['rg'];
  $dt = date('d-m-Y');
  //$t= date('h:i A');
  
    echo "<table width='100%' border='0'>";
  echo "<tr>";
  echo "<td width='100%' bgcolor='#86592d' style='text-align:center'><p style='color:yellow; display:inline; font-size:18px;font-weight: bold'>$N1</td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td width='100%' bgcolor='#ffffb3' style='text-align:center;'><p style='display:inline; font-size:14px;font-weight: bold'>$N2</td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td width='100%' bgcolor='#ffffb3' style='text-align:center '><p style='display:inline; font-size:14px;font-weight: bold'>$N3</td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td width='100%' bgcolor='#ffffb3' style='text-align:center '><p style='display:inline; font-size:14px;font-weight: bold'>$N4</td>";
  echo "</tr>";
  $d=date("l");
  $t=date("h:i A");
  echo "</table>";
  echo "<hr align='center' bgcolor='#ffffb3' style='height: 10px; border: 0; box-shadow: 0 10px 10px -10px red inset;'>";
  echo "<table width='100%' border='0'>";
  echo "<tr>";
  echo "<td width='25%' style='text-align:center;'><p style='display:inline; font-weight: bold;font-size:22px;'>Date  <br> <p style='color:#FF0000;display:inline;font-weight: bold;font-size:22px;'>$dt</td>";
  echo "</td>";
  echo "<td width='50%' bgcolor='#18918B' style='text-align:center;'><p style='color:white;font-size:18px; display:inline; font-weight: bold;'>";
  echo "User Login &nbsp&nbsp <br><p style='font-size:18px; display:inline; font-weight: bold;'> PAYROLL &nbspMANAGEMENT           &nbspSOFTWARE";
  echo "</td>";
  echo "<td width='25%' style='text-align:center'><p style='display:inline; font-weight: bold;font-size:22px;'>$d <br><p style='color:#FF0000;display:inline;font-weight: bold;font-size:22px;'>&nbsp$t</td>";
  echo "</tr>";
  echo "</table>";

?>

<form action="login_submit.php" method="post" enctype="multipart/form-data" name="login">
<center>
<label><strong>Email</strong></label><br>
<input type="email" required name="email" id="email" />
<label><strong><br><br>Password</strong></label><br>
<input type="password" required name="pass" id="pass" />
    <input type="submit" value="Post" />
    <input type="reset" value="Clear" />
</form>
<form action="forgat_password.php" method="post" enctype="multipart/form-data" name="login">
    <input type="submit" value="Forgot Password" />
    </form>
    <div id="fb-root"></div>
  
</center>
  </body>
</html>