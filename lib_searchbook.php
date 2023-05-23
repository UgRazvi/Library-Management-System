<?php
include "lib_common.php";
include "lib_connect.php";
?>
<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>

    <!-- <h3 align="center"> SEARCH STUDENTS RECORD </h1> -->

    <form method="GET" action="lib_searchbook.php">
        <table align='center'>
            <th colspan="2" align="center">
                <h2>SEARCH STUDENTS RECORD</h2>
            </th>
            <tr>
                <td>ENTER BOOK ID
                <td><input type="text" name="t1" placeholder="Enter Book Id" class="inp" style="padding-top: 20px;">

            <tr>
                <td colspan="2" align="center" style="padding-top: 20px;">
                    <input type="submit" name="btn" value="Search Book" style="padding-top: 20px;">
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
        echo "<table align='center' border='1'>";
        echo "<tr><td>BOOK ID : <td>$r[0]";
        echo "<tr><td>BOOK NAME : <td>$r[1]";
        echo "<tr><td>BOOK AUTHOR : <td>$r[2]";
        echo "<tr><td>BOOK SUBJECT : <td>$r[3]";
        echo "<tr><td>BOOK STATUS : <td>$r[4]";
    }
}
?>