<?php
include("file_conn.php");

$file = $_FILES['filename']['name'];
$enroll = $_POST['enroll'];
$semester = $_POST['semester'];


move_uploaded_file($_FILES['filename']['tmp_name'], $file);

$insertquery = "INSERT INTO file_store (`enroll`,`address`,`semester`) VALUES ('$enroll','$file','$semester')";

$iquery = mysqli_query($conn, $insertquery);

echo "<script>
    alert('File Uploaded');
    window.location.href='studymaterial.html';
    </script>";

?>