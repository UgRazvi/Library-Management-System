<?php
include "lib_common.php";
include "lib_connect.php";

$s = "SELECT sid from lib_student order by sid desc";
$rs = mysqli_query($con, $s);
$t = mysqli_num_rows($rs);
$r = mysqli_fetch_array($rs);
if ($t == 0) {
    $sid = '1001';
} else {
    $sid = $r[0]+1;
}

$src = "";
$dst = "";

if (isset($_POST["btn"])) {

    $a = $_POST["name"];
    $b = $_POST["id"];
    $c = $_POST["pswd"];
    $d = $_POST["deg"];
    $e = $_POST["sem"];

    $src = $_FILES["photo"]["tmp_name"];
    $dst = './image/' . $_FILES["photo"]["name"];

    if (move_uploaded_file($src, $dst)) {
        echo "<script>alert('Upload Successfully')</script>";
    } else {
        echo "Uploading Error";
    }

    $con = mysqli_connect("localhost", "root", "", "lib");
    if (!$con)
        die("unable to connect to the server");

    $s = "insert into lib_student values('$a','$b','$c','$d','$e','$dst')";
    // echo $s;

    mysqli_query($con, $s);
    mysqli_close($con);
    echo "<script>alert('REGISTERED SUCCESSFULLY')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIB Add New Student</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>


    <form method="post" action="lib_newstudent.php" enctype="multipart/form-data"  >

        <table align="center" bgcolor="aquamarine">
            <th colspan="2" align="center">
                <h2>Register Student</h2>
            </th>
            <tr>
                <td>ENTER NAME </td>
                <td><input type="text" name="name" class="inp" placeholder=" Enter Student Name"></td>
            </tr>
            <tr>
                <td>ENTER STUDENT ID</td>
                <td><input type="text" name="id" class="inp" value='<?php echo $sid; ?>' readonly></td>
            </tr>
            <tr>
                <td>ENTER STUDENT PASSWORD</td>
                <td><input type="text" name="pswd" class="inp" placeholder=" Enter Student Password"></td>
            </tr>
            <tr>
                <td>ENTER DEGREE</td>
                <td>
                    <!-- <input type="text" name="t3"> -->
                    <select name="deg" class="inp">
                        <option value="BTECH">B.TECH</option>
                        <option value="MTECH">M.TECH</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ENTER SEMESTER</td>
                <td>
                    <!-- <input type="text" name="t4"> -->
                    <select name="sem" class="inp">
                        <option value="1">1st Semester</option>
                        <option value="2">2nd Semester</option>
                        <option value="3">3rd Semester</option>
                        <option value="4">4th Semester</option>
                        <option value="5">5th Semester</option>
                        <option value="6">6th Semester</option>
                        <option value="7">7th Semester</option>
                        <option value="8">8th Semester</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>UPLOAD PHOTO</td>
                <td><input type="file" name="photo" class="inp"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn" value="REGISTER STUDENT"></td>
            </tr>
</body>

</html>