<?php
include("file_conn.php");

$semester = $_POST['semester'];
if(isset($_GET ['semester']))
{
        echo "$semester"; 
        echo $_GET ['semester'];
}
echo "$semester";

$query = "SELECT * FROM file_store WHERE semester = '$semester' ";
$result1 = mysqli_query($conn,$query);

while($row1 = mysqli_fetch_array($result1))
{
        $count = mysqli_num_rows($result1);
        if($count>0)
        {
                echo "</br>";
                echo '<div style = color:red; padding:20%; margin-left:10%;"> File 1: </div>'.$row1['enroll'];
                
                echo "<a href =" .$row1['address']. " > " .$row1['address']. "</a>";
        }
        else
        {       
                echo "No Data Found For This Semester";
                echo "<script> alert('NO DATA FOUND'); </script>";
        } 
}
?>