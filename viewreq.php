<?php
// include "lib_common.php";
include "lib_connect.php";
$a = $_GET["t1"];
$b = $_GET["t2"];
$c = $_GET["t3"];
$d = $_GET["t4"];
$e = $_GET["t5"];
$f = $_GET["t6"];
$g = $_GET["t7"];

if(isset($_POST["Accept"])){
    
// $s = "INSERT INTO `lib_status`(`rid`, `bname`, `bauth`, `bprice`, `bstatus`) VALUES ('$c','$d','$e','1000','Accepted')";
$s = "UPDATE `lib_status` SET `rid`='$c',`bname`='$d',`bauth`='$e',`bprice`='xxxx',`bstatus`='Accepted' WHERE 1";
echo $s;

mysqli_query($con, $s);
mysqli_close($con);
}if(isset($_POST["Reject"])){
    
// $s = "INSERT INTO `lib_status`(`rid`, `bname`, `bauth`, `bprice`, `bstatus`) VALUES ('$c','$d','$e','1000','Rejected')";
$s = "UPDATE `lib_status` SET `rid`='$c',`bname`='$d',`bauth`='$e',`bprice`='xxxx',`bstatus`='Rejected' WHERE 1";
echo $s;

mysqli_query($con, $s);
mysqli_close($con);
}if(isset($_POST["Order"])){
    
// $s = "INSERT INTO `lib_status`(`rid`, `bname`, `bauth`, `bprice`, `bstatus`) VALUES ('$c','$d','$e','1000','Ordered')";
$s = "UPDATE `lib_status` SET `rid`='$c',`bname`='$d',`bauth`='$e',`bprice`='xxxx',`bstatus`='Ordered' WHERE 1";
echo $s;

mysqli_query($con, $s);
mysqli_close($con);
}if(isset($_POST["Available"])){
    
// $s = "INSERT INTO `lib_status`(`rid`, `bname`, `bauth`, `bprice`, `bstatus`) VALUES ('$c','$d','$e','1000','Available')";
$s = "UPDATE `lib_book` SET `bstatus`='Available' WHERE 'bname' = '$d'";
echo $s;

mysqli_query($con, $s);
mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW PAGE</title>
</head>

<body>
    <form action="" method="post">
        <table border=2 cellpadding=10 align=center>
            <th colspan=2 align='center'> DETAILS </th>
            <tr>
                <td align=center>Student ID
                <td> <input type="text" name="sid" value='<?php echo $a?>'>

            <tr>
                <td align=center>Student Name
                <td> <input type="text" name="sname" value='<?php echo $b?>'>

            <tr>
                <td align=center>Request ID
                <td> <input type="text" name="rid" value='<?php echo $c?>'>

            <tr>
                <td align=center>Book Name
                <td> <input type="text" name="bname" value='<?php echo $d?>'>

            <tr>
                <td align=center>Author Name
                <td> <input type="text" name="bauth" value='<?php echo $e?>'>

            <tr>
                <td align=center>Book Subject
                <td> <input type="text" name="bsub" value='<?php echo $f?>'>

            <tr>
                <td align=center>Date Of Issue
                <td> <input type="text" name="doissue" value='<?php echo $g?>'>

            <tr>
                <td align=center>Book Status
                <td> <input type="text" name="bstatus">
           

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="Accept">Accept</button>
                    <button type="submit" name="Reject">Reject</button>
                    <button type="submit" name="Order">Order</button>
                    <button type="submit" name="Available">Available</button>
                </td>
        </table>
    </form>
</body>

</html>