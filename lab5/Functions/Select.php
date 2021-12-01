<style>
    th,td{
        padding: 10px;
    }
    th{
        background: #b1cce7;
        color: #f5f5f5;
    }
    td{
        background: #d8e5f4;
    }
    button{
        padding: 4px 50px;
        width: 250px
        -webkit-transition-duration: 0.3s;
        border-radius: 25px;
        background-color: orange;
        font-size: 16px;
        border: 2px solid gray;
    }
    button:hover{
        padding: 4px 50px;
        background-color: darkorange;
        border-radius: 25px;
        background-color: orange;
        font-size: 16px;
        border: 2px solid black;
    }
    body{
        background-color: #edebca;
    }
</style>
<?php
$C_ip = "127.0.0.1";
$C_name = "root";
$C_pass = "";
$C_bd= "lab005";
$connectBD = mysqli_connect($C_ip,$C_name,$C_pass,$C_bd);
if ($connectBD == false) {
    die("Error connect to database! ") ;
}
$QuerySelect=$_POST['Query'];
$QueryWhere=$_POST['Where'];

if (empty($QueryWhere)) {
    $QueryWhere="1";
}
?>

<h1>Результат запроса: </h1>
<table>
    <tbody>
<?php
$result =mysqli_query($connectBD,"SELECT $QuerySelect FROM `application5` WHERE $QueryWhere"); // запрос1
$result = mysqli_fetch_all($result);
foreach ($result as $result){
    ?>
    <tr>
        <td><?=$result[0]?></td>
        <td><?=$result[1]?></td>
        <td><?=$result[2]?></td>
        <td><?=$result[3]?></td>
    </tr>
    <?php
}
?>
    </tbody>
</table>
<form action="../" method="post">
    <button type="submit">Вернуться назад</button>
</form>
