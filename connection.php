<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="regist";


 $uname = "";
  $mailid = "";
  $password = "";
  $id = 0;
  $edit_state = false;
  $fname = "";
  $lname = "";
  $phnno = "";
  $Dob = "";
  $address = "";
  $gender = "";
  $status = "";
  $country = "";
  $descript = "";
  $hobby = "";
  $tell_abt = "";
  $think_proggramer = "";
  
$connect=mysqli_connect($servername,$username,$password,$dbname);
 /*if($connect->connect_error){
 die("connection failed:".$connect);
 }
 else
 {
 	echo"connected successfully";
 }*/

 if(isset($_POST['save'])){
	$uname = $_POST['uname'];
	$mailid = $_POST['mailid']; 
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phnno = $_POST['phnno'];
	$Dob = $_POST['Dob'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$country = $_POST['country'];
	$descript = $_POST['descript'];
	$hobby = $_POST['hobby'];
	$tell_abt = $_POST['tell_abt'];
	$think_proggramer= $_POST['think_proggramer'];
	

 
 $sql="INSERT INTO registb(uname,mailid,password,fname,lname,phnno,Dob,address,gender,status,country,skill,descript,hobby,tell_abt,think_proggramer) VALUES('abc','truptikol45@gmail.com','123','trupti','kolhe','7875018028','10-janwari-1990','parbhni','femail','unmaried','india','html','fvyhiuh','tyiuihb','engineer','i am coder')";
 mysqli_query($connect, $query);
 $_SESSION['msg'] = "form saved";
 header('Location:index.php');
}
if (isset($_POST['update'])){
 	$_SESSION['msg']="updating";

	$uname = mysqli_real_escape_string($connect,$_POST['uname']);
	$mailid = mysqli_real_escape_string($connect,$_POST['mailid']);
	$password= mysqli_real_escape_string($connect,$_POST['password']);
	$fname = mysqli_real_escape_string($connect,$_POST['fname']);
	$lname = mysqli_real_escape_string($connect,$_POST['lname']);
	$phnno= mysqli_real_escape_string($connect,$_POST['phnno']);
	$Dob = mysqli_real_escape_string($connect,$_POST['Dob']);
	$address= mysqli_real_escape_string($connect,$_POST['address']);
	$gender = mysqli_real_escape_string($connect,$_POST['gender']);
	$phnno= mysqli_real_escape_string($connect,$_POST['status']);
	$Dob = mysqli_real_escape_string($connect,$_POST['country']);
	$phnno= mysqli_real_escape_string($connect,$_POST['descript']);
	$Dob = mysqli_real_escape_string($connect,$_POST['hoby']);
	$phnno= mysqli_real_escape_string($connect,$_POST['tell_abt']);
	$Dob = mysqli_real_escape_string($connect,$_POST['think_programmer']);


 ?>