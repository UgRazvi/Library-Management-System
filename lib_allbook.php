<?php
include "lib_common.php";

?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <!-- <h2 align="center">ALL BOOKS DETAIL -->

</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "lib");
if (!$con)
    die("Unbale to connect to the Server");

$s = "select * from lib_book";

$rs = mysqli_query($con, $s);
echo "<table align='center'>";

echo "<th colspan=5 align=center><h2> BOOK DETAILS ";
echo "<tr>";
echo "<td>Book ID";
echo "<td>Book Name";
echo "<td>Book Author";
echo "<td>Book Subject";
echo "<td>Book status</tr> <br>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr style='padding-top: 100px;'>";
    echo "<td>$r[0]";
    echo "<td>$r[1]";
    echo "<td>$r[2]";
    echo "<td>$r[3]";
    echo "<td>$r[4]";
    
}
?>