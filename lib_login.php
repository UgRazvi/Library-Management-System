<?php

include "lib_connect.php";

if (isset($_POST["s_btn"])) {

    $name = $_POST["name"];
    $id = $_POST["id"];
    $pswd = $_POST["pwd"];

    $qry = "select * from lib_admin where lib_admin_id='$id' and lib_admin_pswd='$pswd'";
    
    $rs = mysqli_query($con, $qry);
    $t = mysqli_num_rows($rs);

    if ($t != 0) {
        

        header("location:lib_home.php");
    } else {
        $qry = "select * from lib_student where sid=$id and spswd=$pswd";
        

        session_start();
        $_SESSION['unname']= $name;
        $_SESSION['sid']= $id;

        $rs = mysqli_query($con, $qry);
        $t = mysqli_num_rows($rs);
        if ($t == 0) {
            echo "<script>alert('No Record Found')</script>";
        } else {
            // echo "Student";

            header("location:std_home.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIB_LOGIN PAGE</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <form method="post">
        <table align="center" cellspacing="10" border="1" height="500px" width="500px" class="login_table" bgcolor="pink">
            <th colspan="2">
                <h1>THIS IS LOGIN PAGE</h1>
            </th>

            <tr>
                <td>Enter Name</td>
                <td><input type="text" name="name" placeholder="NAME" class="inp"></td>
            </tr>

            <tr>
                <td>Enter ID</td>
                <td><input type="text" name="id" placeholder=" USER ID" class="inp"></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="text" name="pwd" placeholder="PASSWORD" class="inp"></td>
            </tr>


            <hr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="s_btn" value="LOG-In" class="sub-btn">
                </td>
            </tr>
        </table>
        <hr>

    </form>
</body>

</html>