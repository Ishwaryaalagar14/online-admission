<?php
include 'connection.php';


$course = 'PG';
// personal details
$name=$_POST['applicant_name'];
$branch = $_POST['branch'];
$fn=$_POST['father_name'];
$mn=$_POST['mother_name'];
$dob=$_POST['date_year']."-".$_POST['date_month']."-".$_POST['date_day'];
$mobno=$_POST['mobile'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$bloodgroup=$_POST['blood_group'];
$nationality=$_POST['nationality'];
$mailid=$_POST['email'];
$aadhar=$_POST['aadhar_number'];
$preadd=$_POST['present_address'];
$peradd=$_POST['permanent_address'];

// ssc details
$ssc_board = $_POST['ssc_board'];
$ssc_medium = $_POST['ssc_medium'];
$ssc_institute = $_POST['ssc_institute_name'];
$ssc_mark = $_POST['ssc_mark'];
$ssc_year = $_POST['ssc_pass_year'];
// $ssc_board = $_POST['ssc_board'];

// hsc details
$hsc_board = $_POST['hsc_board'];
$hsc_medium = $_POST['hsc_medium'];
$hsc_institute = $_POST['hsc_institute_name'];
$hsc_mark = $_POST['hsc_mark'];
$hsc_year = $_POST['hsc_pass_year'];
$hsc_board = $_POST['hsc_board'];
$hsc_group = $_POST['hsc_group'];



//graduation details
$ug_university = $_POST['ug_university'];
$ug_course = $_POST['ug_course'];
$ug_mode = $_POST['ug_mode'];
$ug_cgpa = $_POST['ug_cgpa'];
$ug_institute = $_POST['ug_institute_name'];
$ug_pass_year = $_POST['ug_pass_year'];




// echo "SSC Board: " . $ssc_board . "<br>";
// echo "SSC Medium: " . $ssc_medium . "<br>";
// echo "SSC Institute: " . $ssc_institute . "<br>";
// echo "SSC Mark: " . $ssc_mark . "<br>";
// echo "SSC Year: " . $ssc_year . "<br>";


// echo "HSC Board: " . $hsc_board . "<br>";
// echo "HSC Medium: " . $hsc_medium . "<br>";
// echo "HSC Institute: " . $hsc_institute . "<br>";
// echo "HSC Mark: " . $hsc_mark . "<br>";
// echo "HSC Year: " . $hsc_year . "<br>";
// echo "HSC Group: " . $hsc_group . "<br>";


// echo "UG University: " . $ug_university . "<br>";
// echo "UG Course: " . $ug_course . "<br>";
// echo "UG Mode: " . $ug_mode . "<br>";
// echo "UG CGPA: " . $ug_cgpa . "<br>";
// echo "UG Institute: " . $ug_institute . "<br>";
// echo "UG Year: " . $ug_pass_year . "<br>";


$sql="insert into applications(course,branch,status) values('$course','$branch','pending')";
$result=mysqli_query($conn,$sql);
$last_id = mysqli_insert_id($conn);



$sql="insert into personaldetails(application_no,applicant_name,course,branch,father_name,mother_name,dob,mobilenumber,gender,religion,bloodgroup,nationality,emailid,aadhar,presentaddress,permanentaddress) values('$last_id','$name','$course','$branch','$fn','$mn','$dob','$mobno','$gender','$religion','$bloodgroup','$nationality','$mailid','$aadhar','$preadd','$peradd')";

$result=mysqli_query($conn,$sql);
// $last_id = mysqli_insert_id($conn);
// echo $last_id;

$sql="insert into ssc_details(application_no,board,medium,institution_name,mark,passing_year) values('$last_id','$ssc_board','$ssc_medium','$ssc_institute','$ssc_mark','$ssc_year')";
$result=mysqli_query($conn,$sql);

$sql="insert into hsc_details(application_no,board,medium,institution_name,mark,passing_year,hsc_group) values('$last_id','$hsc_board','$hsc_medium','$hsc_institute','$hsc_mark','$hsc_year','$hsc_group')";
echo $sql;
$result=mysqli_query($conn,$sql);

$sql="insert into ug_details(application_no,university,course,mode_of_study,cgpa,passing_year,institution_name) values('$last_id','$ug_university','$ug_course','$ug_mode','$ug_cgpa','$ug_pass_year','$ug_institute')";
$result=mysqli_query($conn,$sql);




$last_id = mysqli_insert_id($conn);


?>