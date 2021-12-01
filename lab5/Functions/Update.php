<?php
$C_ip = "127.0.0.1";
$C_name = "root";
$C_pass = "";
$C_bd= "lab005";
$connectBD = mysqli_connect($C_ip,$C_name,$C_pass,$C_bd);
if ($connectBD == false) {
    die("Error connect to database! ") ;
}
$ID=$_POST['ID'];
$ColumnName=$_POST['Stolbec'];
$Value=$_POST['Value'];
mysqli_query($connectBD,"UPDATE `application5` SET `$ColumnName` = '$Value' WHERE `application5`.`ID` = '$ID';");
header("Location: ../index.php");
?>

