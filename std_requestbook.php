<?php

include "std_common.php";
include "lib_connect.php";


$s = "SELECT rid from lib_request order by rid desc";
$rs = mysqli_query($con, $s);
$t = mysqli_num_rows($rs);
$r = mysqli_fetch_array($rs);
if ($t == 0) {
    $rid = 'R1001';
} else {
    $rid = "$r[0]" . "1";
}

if (isset($_GET["r-btn"])) {


    $a = $name;
    $b = $_GET["bname"];
    $c = $_GET["authname"];
    $d = $_GET["bsub"];
    $e = $_GET["doissue"];
    $f = $id;
    $g = $rid;

    $s = "select * from lib_student where sname='".$a."'";
    $rs = mysqli_query($con, $s);
    $t = mysqli_num_rows($rs);
    if ($t != 0) {

        $s1 = "INSERT INTO `lib_request` VALUES ('".$f."','".$a."','$g','$b','$c','$d','$e')";
        // echo $s1;
        mysqli_query($con, $s1);
        mysqli_close($con);
        // echo "<script>alert('')</script>";
        echo "<script>alert('Request Submitted and Your Request Id is : $g')</script>";
    } else {
        echo "<script>alert('ERROR IN REQUESTING BOOK')</script>";
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


    <form method="get" action="std_requestbook.php">

        <table align="center">
            <th colspan="2" align="center" bgcolor="aqua">
                <h2>Request Book</h2>
            </th>
            <tr>
                <td>Enter Book Name</td>
                <td><input type="text" name="bname" class="inp"></td>
            </tr>
            <tr>
                <td>Enter Author Name</td>
                <td><input type="text" name="authname" class="inp"></td>
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
                <td>Enter Date Of Issue</td>
                <td><input type="date" name="doissue" class="inp"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="r-btn" value="Request"></td>
            </tr>
</body>

</html>