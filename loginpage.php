<?php
session_start();
$host='localhost';
$user='root';
$pass='';
//DataBase Connecivity
$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('testdb',$con);
//Declarations of all names
$id=$_POST['id'];
$password=$_POST['password'];
$sqlselect=mysql_query("SELECT * FROM UserCrediantails WHERE id=$id AND password='$password'") or die(mysql_error());
	if(mysql_num_rows($sqlselect)>0)
	{  
            $row = mysql_fetch_array($sqlselect);
			$_SESSION["id"] = $row['id'];
	        header("Location:users.php");
	}
	else{
		echo "error";
	}


?>
