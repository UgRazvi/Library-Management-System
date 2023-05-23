<?php
include "std_common.php";
include "lib_connect.php";
?>

<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>

    <form method="GET" action="std_searchbook.php">
        <table align="center">
            <th colspan="2" align="center">
                <h2>SEARCH STUDENTS RECORD</h2>
            </th>
            <tr>
                <td>ENTER BOOK ID
                <td><input type="text" name="t1" placeholder="Enter Book Id" class="inp">

            <tr>
                <td colspan="2" align="center" style="padding-top: 20px;">
                    <input type="submit" name="btn" value="Search Book">
    </form>
    </table>
</body>

</html>

<?php


if (isset($_GET["btn"])) {
    $a = $_GET["t1"];

    $s = "select * from lib_book where bid=$a";

    $rs = mysqli_query($con, $s);

    $t = mysqli_num_rows($rs);
    if ($t == 0)
        echo "<script>alert('NO RECORD FOUND')</script>";

    else {
        $r = mysqli_fetch_array($rs);
        echo "<table align='center' style='padding-top: 20px; padding-bottom: 20px;'>";
        echo "<th align='center' colspan='2' bgcolor=aqua><h3>Book Deatails";
        echo "<tr><td>BOOK ID : <td>$r[0]";
        echo "<tr><td>BOOK NAME : <td>$r[1]";
        echo "<tr><td>BOOK AUTHOR : <td>$r[2]";
        echo "<tr><td>BOOK SUBJECT : <td>$r[3]";
        echo "<tr><td>BOOK STATUS : <td>$r[4]";
    }
}
?>