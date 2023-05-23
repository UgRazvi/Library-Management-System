<?php
include "std_common.php";
include "lib_connect.php";

?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
    <style>
        .tab tr td {
            padding: 12px;
        }
    </style>
</head>

<body>
    <!-- <h2 align="center">ALL STUDENTS DETAIL -->

</body>

</html>

<?php

$s = "select * from lib_request where sname = '".$name."'";
// echo $s;

$rs = mysqli_query($con, $s);
echo "<table align='center' bgcolor='aquamarine' style='width:800px' class='tab'> ";

echo "<th colspan=8 align=center><h2>STUDENT'S DETAIL";
echo "<tr >";
echo "<td align=center>Student ID";
echo "<td align=center>Student Name";
echo "<td align=center>Request ID";
echo "<td align=center>Book Name";
echo "<td align=center>Author Name";
echo "<td align=center>Subject";
echo "<td align=center>Date Of Issue";
// echo "<td align=center>Cancel</tr>";

$r = mysqli_fetch_array($rs);
echo "<tr >";
echo "<td align=center>$r[0]";
echo "<td align=center>$r[1]";
echo "<td align=center>$r[2]";
echo "<td align=center>$r[3]";
echo "<td align=center>$r[4]";
echo "<td align=center>$r[5]";
echo "<td align=center>$r[6]";
// echo "<td align=center>$r[7]";
// echo "<td align=center><img src='$r[5]' style='height:60px; width:60px; border-radius:50%;'>";

?>