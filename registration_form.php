<?php
    include("user_conn.php");
?>

<?php

    $name = $_POST['name'];
    $enroll = $_POST['enroll'];
    $semester = $_POST['semester'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $confirmpass = $_POST['confirmpass'];

    $query = "INSERT INTO `user`(`enroll`, `name`, `semester`, `phone`, `email`, `pass`, `confirmpass`, `gender`) VALUES ('$enroll','$name','$semester','$phone','$email','$pass','$confirmpass','$gender')";

    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "<script>
        alert('Records Inserted');
        window.location.href='login_page1.html';
        </script>";
    }
    else{
        echo"Failed";
    }
?>