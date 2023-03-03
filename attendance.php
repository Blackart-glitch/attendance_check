<?php
include 'db_conn.php';

$msg = $salary = '';
if(isset($_POST['submit'])){
    $Emp_name = $_POST['Emp_name'];
    $Emp_code = $_POST['Emp_code'];
    // first query

    $check = "SELECT * FROM `attendance_list` WHERE `Employee_name` = '$Emp_name' AND `Employee_code` = '$Emp_code'";
    $check = mysqli_query($conn, $check);

    
    if (mysqli_num_rows($check) == 0){
        mysqli_free_result($check);
        $netsal = 0;
        $check = "INSERT INTO `attendance_list` VALUES ('$Emp_name', '$Emp_code', '$count', '$netsal')";
        $check = mysqli_query($conn, $check);

    }else{
        $count = mysqli_fetch_assoc($check);
        $count = $count['attendance_count'];
        $count = $count + 1;
        mysqli_free_result($check);
        $check = "UPDATE `attendance_list` SET `attendance_count` = '$count' WHERE `Employee_name` = '$Emp_name' AND `Employee_code` = '$Emp_code'";
        $check = mysqli_query($conn, $check);

    }
    $msg = '<span style="color:green;"> successful </span>';
}


if(isset($_POST['check'])){
    $Emp_name = $_POST['Emp_name'];
    $Emp_code = $_POST['Emp_code'];
    $check = "SELECT `attendance_count` FROM `attendance_list` WHERE `Employee_name` = '$Emp_name' AND `Employee_code` = '$Emp_code'";
    $check = mysqli_query($conn, $check);
    $rows = mysqli_fetch_assoc($check);
    $count = $rows['attendance_count'];
    $salary = 10000;
    $salary = $salary/30;
    $salary = $salary * $count;
    echo "it worked";
}

?>