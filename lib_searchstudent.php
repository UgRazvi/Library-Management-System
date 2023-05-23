<?php
include "lib_common.php";
include "lib_connect.php";
?>
<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <hr>
    <!-- <h3 align="center"> SEARCH STUDENTS RECORD </h1> -->

    <form method="GET" action="lib_searchstudent.php">
        <table align="center">
            <th colspan="2" align="center">
                <h2>SEARCH STUDENT'S RECORD</h2>
            </th>
            <tr >
                <td>Enter Student ID
                <td >
                    <input type=" text" name="t1" class="inp" placeholder="Enter Student Id" style="padding-left: 8px;">

            <tr>
                <td colspan="2" align="center" style="padding-top: 20px;">
                    <input type="submit" name="btn" value="search" >
    </form>
    </table>
</body>

</html>

<?php


if (isset($_GET["btn"])) {
    $a = $_GET["t1"];

    // $con = mysqli_connect("localhost", "root", "", "lib");
    // if (!$con)
    //     die("Unable to connect server");

    $s = "select * from lib_student where sid=$a";

    $rs = mysqli_query($con, $s);

    $t = mysqli_num_rows($rs);
    if ($t == 0)
        echo "<script>alert('NO RECORD FOUND')</script>";

    else {
        $r = mysqli_fetch_array($rs);
        echo "<table align='center' >";
        echo "<th colspan=2 align=center> <h2> Student Details";
        echo "<tr><td>NAME IS:<td>$r[0]";
        echo "<tr><td>Student Id:<td>$r[1]";
        echo "<tr><td>Password:<td>$r[2]";
        echo "<tr><td>DEGREE IS:<td>$r[3]";
        echo "<tr><td>SEMESTER IS:<td>$r[4]";
        echo "<tr><td>PHOTO : <td> <img src='$r[5]' style='height:60px; width:60px; border-radius:50%;'>";
    }
}
?>