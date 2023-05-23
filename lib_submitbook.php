<?php
include "lib_common.php";
include "lib_connect.php";

if (isset($_POST['btn'])) {
    $a = $_POST['id'];
    $b = $_POST['bid'];

    $s = "delete from lib_issue where sid=$a and bid=$b";
    mysqli_query($con, $s);

    $s1 = "UPDATE `lib_book` SET `bstatus`='Available' WHERE bid=$b";
    mysqli_query($con, $s1);
    mysqli_close($con);

    echo "<script>alert('Book Submitted Successfully')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lib BOOK SUBMIT</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <form action="lib_submitbook.php" method="post">
        <table align="center" cellpadding="10" width="50%">
            <th colspan="2" align="center" bgcolor="aqua">
                <h2>Submit Book</h2>
            </th>
            <tr>
                <td>Enter Student Id: </td>
                <td><input type="text" name="id" placeholder="Enter Student Id" class="inp" placeholder="Enter Student Id"></td>
            </tr>
            <tr>
                <td>Enter BOOK Id: </td>
                <td><input type="text" name="bid" placeholder="Enter Book Id" class="inp"></td>
            </tr>
            <tr>

                <td align="center" colspan="2"><input type="Submit" name="btn" value="Submit Book">
            </tr>

        </table>
    </form>
</body>

</html>