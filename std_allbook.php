<?php
include "std_common.php";
include "lib_connect.php";

?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>

</body>

</html>

<?php
// $con = mysqli_connect("localhost", "root", "", "lib");
// if (!$con)
//     die("Unbale to connect to the Server");

$s = "select * from lib_book";

$rs = mysqli_query($con, $s);
echo "<table align='center' >";

echo "<th colspan=5 align=center><h2>BOOK DETAILS";
echo "<tr>";
echo "<td>Book ID";
echo "<td>Book Name";
echo "<td>Book Author";
echo "<td>Book Subject";
echo "<td>Book status</tr>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    echo "<td>$r[0]";
    echo "<td>$r[1]";
    echo "<td>$r[2]";
    echo "<td>$r[3]";
    echo "<td>$r[4]";
}
?>