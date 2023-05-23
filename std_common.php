<?php
session_start();
$name = $_SESSION['unname'];
$id = $_SESSION['sid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PANEL</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body class="cmn-body">


    <form action="lib_home.php" method="get">
        <table align="center" cellspacing="10" class="cmn_table">
            <div style="float: right;" > 
                <?php
                echo "Username : ";
                echo $name;
                echo $id;
                // echo "<script> alert('$name') </script>";
                // echo "<script> alert($id) </script>";
                ?>
            </div>
            <hr>
            <th align="center" colspan="8">
                <h1>LIBRARY MANAGEMENT SYSTEM</h1>
            </th>
            <tr width="100">
                <td><a href="std_home.php">HOME PAGE</a></td>
                <td><a href="std_studentprofile.php">STUDENT PROFILE</a></td>
                <td><a href="std_searchbook.php">SEARCH BOOK</a></td>
                <td><a href="std_allbook.php">ALL BOOKS</a></td>
                <td><a href="std_myissued.php">MY ISSUED BOOKS</a></td>
                <td><a href="std_requestbook.php">REQUEST BOOK</a></td>
                <td><a href="std_myrequest.php">MY REQUESTED BOOK</a></td>
                <td><a href="std_logout.php">LOG-OUT</a></td>
            </tr>
            <hr>
        </table>
        <hr>
    </form>
</body>

</html>