<?php
include "lib_common.php";
include "lib_connect.php";

?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
    <style>
        .tab{
            border-spacing: 0;
            width: 70%;
            
        }
        table tr td{
            padding: 12px;
        }
        
    </style>
</head>

<body>
    <!-- <h2 align="center">ALL STUDENTS DETAIL -->

</body>

</html>

<?php

$s = "select * from lib_request";

$rs = mysqli_query($con, $s);
echo "<table align='center' bgcolor='aquamarine' class='tab'>";

echo "<th colspan=19 align=center><h2>STUDENT'S DETAIL ";
echo "<tr>";
echo "<td align=center>Student ID";
echo "<td align=center>Student Name";
echo "<td align=center>Request ID";
echo "<td align=center>Book Name";
echo "<td align=center>Author Name";
echo "<td align=center>Subject";
echo "<td align=center>Date Of Issue";
echo "<td align=center colspan=3>Request Status";
// echo "<td align=center>Date Of Issue</tr>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    echo "<td align=center>$r[0]";
    echo "<td align=center>$r[1]";
    echo "<td align=center>$r[2]";
    echo "<td align=center>$r[3]";
    echo "<td align=center>$r[4]";
    echo "<td align=center>$r[5]";
    echo "<td align=center>$r[6]";
    echo "<td align=center><a href='viewreq.php?t1=$r[0]&t2=$r[1]&t3=$r[2]&t4=$r[3]&t5=$r[4]&t6=$r[5]&t7=$r[6]'><button name='pending' >Pending </button></a>";
    // echo "<td align=center><a href=''><button name='deny' >Deny </button></a>";
    // echo "<td align=center><a href=''><button name='pending' >Pending </button></a>";
}
?>
<a href=""></a>
