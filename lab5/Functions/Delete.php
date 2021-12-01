<?php
$C_ip = "127.0.0.1";
$C_name = "root";
$C_pass = "";
$C_bd= "lab005";
$connectBD = mysqli_connect($C_ip,$C_name,$C_pass,$C_bd);
if ($connectBD == false) {
    die("Error connect to database! ") ;
}
$DelID=$_POST['ID'];
mysqli_query($connectBD,"DELETE FROM `application5` WHERE `application5`.`ID` = $DelID");
header("Location: ../index.php");
?>

