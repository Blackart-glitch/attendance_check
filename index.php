<?php
        include 'attendance.php';
    ?>
<html>

    <head>
    <title>Attendance marker</title>
    <link rel="stylesheet" href="attendance.css">
    </head>
    <body>
        <form class='att_form' method="post" action="">
            <h1>Attendance Form</h1>
            <?php echo $msg; ?>
            <input class="text" type="text" placeholder="Enter your name" name="Emp_name" required>
            <input class="text" type="text" placeholder="Enter your employee code" name="Emp_code" required>
            <input type="checkbox" name="sgn" required>
            <span>checking this box confirms your signature</span>
            <input type="submit" value="MARK ATTENDANCE" name="submit">
            <input type="submit" value="CHECK EARNINGS ACCRUED" name="check">
        <form>
            <?php echo $salary; ?>
    </body>
    <footer>
    </footer>
</html>