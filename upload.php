<?php
include("file_conn.php");

$semester = $_POST['semester'];
$file =$_FILES['filename']['name'];
$filename=$_POST["rollno"];
echo $file;
move_uploaded_file($_FILES['filename']['tmp_name'],$file);
$add='/'.$filename.".pdf";
$query =mysqli_query($conn,"INSERT INTO file_store VALUES ('0','$add','$semester')");
