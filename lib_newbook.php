<?php
include "lib_common.php";
include "lib_connect.php";


$s = "SELECT bid from lib_book order by bid desc";
$rs = mysqli_query($con, $s);
$t = mysqli_num_rows($rs);
$r = mysqli_fetch_array($rs);
if ($t == 0) {
    $bid = '101';
} else {
    $bid = $r[0]+1;
}

// $typ = "";
// $siz = "";
// $src = "";
// $dst = "";

if (isset($_GET["btn"])) {

    $a = $_GET["bid"];
    $b = $_GET["bname"];
    $c = $_GET["bauth"];
    $d = $_GET["bsub"];
    // $g = $_GET["photo"];

    // $typ = $_FILES["f"]["type"];
    // $siz = $_FILES["f"]["size"];

    // echo "File Type is : $typ <br>";
    // echo "File Size is : $siz <br>";

    // $src = $_FILES["f"]["tmp_name"];
    // $dst = $_FILES["f"]["name"];

    // if ($typ == 'image/jpeg' || $typ == 'image/png' || $typ == 'image/jpeg') {
    //     if (move_uploaded_file($src, "./Images/$dst")) {
    //         echo "<script>alert('Upload Successfully')</script>";
    //     } else {
    //         echo "Uploading Error";
    //     }
    // }

    // $con = mysqli_connect("localhost", "root", "", "lib");
    // if (!$con)
    //     die("unable to connect to the server");

    $s = "INSERT INTO lib_book(`bid`, `bname`, `bauth`, `bsub`) VALUES ($a,'$b','$c','$d');";
    // echo $s; 
    $s1 = "UPDATE lib_book SET bstatus='Available'";
    // echo $s1;
    
    mysqli_query($con, $s);
    mysqli_query($con, $s1);
    mysqli_close($con);
    echo "<script>alert('REGISTERED SUCCESSFULLY')</script>";
}
?>
<!DOCTYPE html>
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


    <form method="get" action="lib_newbook.php">

        <table align="center">
            <th colspan="2" align="center">
                <h2>Add Book</h2>
            </th>
            <tr>
                <td>BOOK ID</td>
                <td><input type="text" name="bid" class="inp" placeholder="Enter Book ID" style="padding-top: 20px;" ></td>
            </tr>
            <tr>
                <td>BOOK NAME </td>
                <td><input type="text" name="bname" class="inp" placeholder="Enter Book Name" style="padding-top: 20px;"></td>
            </tr>
            <tr>
                <td>BOOK AUTHOR</td>
                <td><input type="text" name="bauth" class="inp" placeholder="Book Author Name" style="padding-top: 20px;"></td>
            </tr>
            <tr>
                <td>Select Subject</td>
                <td >
                    <!-- <input type="text" name="t3"> -->
                    <select name="bsub" class="inp" style="padding-top: 20px;">
                        <option value="MATHS">MATHS</option>
                        <option value="Physics">Physics</option>
                        <option value="AOA">AOA</option>
                        <option value="DSA">DSA</option>
                        <option value="FULL STACK">FULL STACK</option>
                    </select>
                </td>
            </tr>

            <!-- 
            <tr>
                <td>UPLOAD PHOTO</td>
                <td><input type="file" name="photo" class="inp"></td>
            </tr> -->


            


            <tr>
                <td colspan="2" align="center" style="padding-top: 20px;">
                    <input type="submit" name="btn" value="Add BOOK TO LIBRARY" style="padding-top: 20px;">
                </td>
            </tr>
</body>

</html>