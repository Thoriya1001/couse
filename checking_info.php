<?php include("user_conn.php");
?>


<?php
    $enroll = $_POST['enroll'];
    $pass = $_POST['pass'];
    echo $enroll;
    echo $pass;
    $query = "SELECT * FROM user WHERE enroll='$enroll' and pass = '$pass' ";
    $rs =  mysqli_query($conn,$query);
    $count = mysqli_num_rows($rs);

    if($count>0)
    {
        echo "<script>
        alert('Welcome User');
        window.location.href='homepage.html';
        </script>";
    }
    else
    {
        echo "<script>
        alert('INVALID ENROLLMENT / PASSWORD');
        window.location.href='login_page1.html';
        </script>";
    }
?>

