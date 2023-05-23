<?php
include "lib_common.php";
include "lib_connect.php";
if (isset($_GET["i-btn"])) {
    $a = $_GET["sid"];
    $b = $_GET["bid"];
    $d = $_GET["bsub"];
    $e = $_GET["doissue"];
    $f = $_GET["dosub"];
    $s = "select * from lib_student where sid=$a";
    $rs = mysqli_query($con, $s);
    $t = mysqli_num_rows($rs);
    if ($t != 0) {
        $s3 = "select * from lib_issue where bid=$b";
        // echo"$s3";
        $rs = mysqli_query($con, $s3);
        $t3 = mysqli_num_rows($rs);
        if ($t3 != 0) {
            echo "<script> alert('Book is issued already') </script>";
        } else {

            $s1 = "select * from lib_book where bid=$b";
            $rs1 = mysqli_query($con, $s1);
            $t1 = mysqli_num_rows($rs1);
            if ($t1 != 0) {
                $s2 = "INSERT INTO `lib_issue`(`sid`, `bid`, `bsub`, `doissue`, `dosub`) VALUES ($a, $b,'$d', '$e', '$f')";
                mysqli_query($con, $s2);
                $s4 = "UPDATE `lib_book` SET `bstatus`='Issued' WHERE bid=$b";
                mysqli_query($con, $s4);
                mysqli_close($con);
                echo "<script>alert('Book Issued Successfully')</script>";
            } else "<script>alert('Book is not issue')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIB Add New Student</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>


    <form method="get" action="lib_issuebook.php">

        <table align="center">
            <th colspan="2" align="center" bgcolor="aqua">
                <h2>Issue Book</h2>
            </th>
            <tr>
                <td>ENTER Student ID </td>
                <td><input type="text" name="sid" class="inp"></td>
            </tr>
            <tr>
                <td>ENTER BOOK ID</td>
                <td><input type="text" name="bid" class="inp"></td>
            </tr>

            <tr>
                <td>Select Subject</td>
                <td>
                    <select name="bsub" class="inp">
                        <option value="MATHS">MATHS</option>
                        <option value="Physics">Physics</option>
                        <option value="AOA">AOA</option>
                        <option value="DSA">DSA</option>
                        <option value="FULL STACK">FULL STACK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ENTER Date Of Issue</td>
                <td><input type="date" name="doissue" class="inp"></td>
            </tr>
            <tr>
                <td>ENTER Date Of Submission</td>
                <td><input type="date" name="dosub" class="inp"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="i-btn" value="Issue Book"></td>
            </tr>
</body>

</html>