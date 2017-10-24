<?php
$host='localhost';
$user='root';
$pass='';
//DataBase Connecivity
$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('testdb',$con);
$usrid=$_POST['usrid'];
$jobtype=$_POST['jobtype'];
$sql=mysql_query("update UserCrediantails set jobapply='$jobtype' where id=$usrid");
if($sql>0)
{
	if(strpos($jobtype, 'software')!==false) {
	   $sqljob=mysql_query("update jobportal set software=software+1 where checkid='check'");
	   if($sqljob>0){
		   ?>
		   <center><h2>Sucessfully Applied For Software Job .. You willbe redirect to the jobportal page within 5 seconds</h2></center>
		   <?php
		   header("refresh:5;url=users.php");
	   }
	}else if(strpos($jobtype, 'hardware')!==false) {
	   $sqljob=mysql_query("update jobportal set hardware=hardware+1 where checkid='check'");
	   if($sqljob>0){
		   ?>
		   <center><h2>Sucessfully Applied For Hardware Job .. You willbe redirect to the jobportal page within 5 seconds</h2></center>
		   <?php
		   header("refresh:5;url=users.php");
	   }
	}
	else if(strpos($jobtype, 'electrical')!==false) {
	   $sqljob=mysql_query("update jobportal set electrical=electrical+1 where checkid='check'");
	   if($sqljob>0){
		   ?>
		   <center><h2>Sucessfully Applied For Electrical Job .. You willbe redirect to the jobportal page within 5 seconds</h2></center>
		   <?php
		   header("refresh:5;url=users.php");
	   }
	}
	else if(strpos($jobtype, 'it')!==false) {
	   $sqljob=mysql_query("update jobportal set it=it+1 where checkid='check'");
	   if($sqljob>0){
		   ?>
		   <center><h2>Sucessfully Applied For IT Job .. You willbe redirect to the jobportal page within 5 seconds</h2></center>
		   <?php
		   header("refresh:5;url=users.php");
	   }
	}else{
		echo "job notupated";
	}
}else{
	echo "Error in applying";
}
?>