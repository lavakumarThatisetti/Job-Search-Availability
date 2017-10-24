<?php
session_start();
$host='localhost';
$user='root';
$pass='';
//DataBase Connecivity
$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('testdb',$con);

//Declarations of all names
$name=$_POST['name'];
$uname=$_POST['username'];
$mobileno=$_POST['mobileno'];
$dob=$_POST['dob'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$sqls=mysql_query("SELECT * FROM UserCrediantails WHERE emailid='$email'");
if(mysql_num_rows($sqls)>0)
{
echo "email name already exist ";
return;
}
else
{
$sql="INSERT INTO UserCrediantails(name,username,mobilno,emailid,dob,qualification,password) VALUES('$name','$uname','$mobileno','$email','$dob','$qualification','$password')";
$query=mysql_query($sql) or die(mysql_error());
if($query){
echo "Data inserted sucessfully";
$sqlselect=mysql_query("SELECT * FROM UserCrediantails WHERE emailid='$email'") or die(mysql_error());
	if(mysql_num_rows($sqlselect)>0)
	{  
            $row = mysql_fetch_array($sqlselect);
			$_SESSION["id"] = $row['id'];
	        header("Location:users.php");
	}
}
}

?>
