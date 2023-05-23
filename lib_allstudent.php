<?php
include "lib_common.php";

?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <!-- <h2 align="center">ALL STUDENTS DETAIL -->

</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "lib");
if (!$con)
    die("Unbale to connect to the Server");

$s = "select * from lib_student";

$rs = mysqli_query($con, $s);
echo "<table align='center' bgcolor='aquamarine'>";

echo "<th colspan=5 align=center><h2>STUDENT'S DETAIL";
echo "<tr>";
echo "<td align=center>Student Name";
echo "<td align=center>Student ID";
echo "<td align=center>Degree";
echo "<td align=center>Semester";
echo "<td align=center>Student Photo</tr>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    echo "<td align=center>$r[0]";
    echo "<td align=center>$r[1]";
    echo "<td align=center>$r[3]";
    echo "<td align=center>$r[4]";
    echo "<td align=center><img src='$r[5]' style='height:60px; width:60px; border-radius:50%;'>";
}
?>