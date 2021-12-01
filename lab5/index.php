<h1>Лабораторная работа №4-5</h1>
<?php
$C_ip = "127.0.0.1";
$C_name = "root";
$C_pass = "";
$C_bd= "lab005";
$connectBD = mysqli_connect($C_ip,$C_name,$C_pass,$C_bd);
if ($connectBD == false) {
    die("Error connect to database! ") ;
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Staff</title>
</head>
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
    input[type="text"] {
    line-height: 0.7;
    background: #b3e5ff;
}
</style>
<h2>Общая информация о DDL и DML :</h2>
<?php
print "<b>DDL（Data Definition Language)</b> - язык определения данных, который имеет дело со схемами баз данных и описаниями того, как данные должны храниться в базе данных.
<br/>  CREATE – для создания базы данных и ее объектов, таких как (таблица, индекс и др).
<br/>  ALTER – изменяет структуру существующей базы данных.
<br/>  DROP – удаление объектов из базы данных.
<br/>  RENAME – переименование объекта.
<br/><br/> <b>DML (Data Manipulation Language)</b> - язык манипулирования данными, используется для хранения, изменения, извлечения, удаления и обновления данных в базе данных. 
<br/>  DML имеет дело с манипулированием данными и включает в себя наиболее распространенные операторы SQL, такие как:
<br/> SELECT – получение данных из одной или нескольких таблиц.
<br/> INSERT – вставка данных в таблицу.
<br/> UPDATE – обновляет существующие данные в таблице.
<br/> DELETE – удаление всех записей из таблицы.
";

?>
<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Salary</th>
        <th>Number</th>
    </tr>
    </thead>
    <tbody>

    <h2>Таблица сотрудников и информации о них : </h2>
    <?php
    $result = mysqli_query($connectBD,"SELECT * FROM `application5`");
    $result = mysqli_fetch_all($result);
    foreach ($result as $result){
        ?>

        <tr>
            <td><?=$result[0]?></td>
            <td><?=$result[1]?></td>
            <td><?=$result[2]?></td>
            <td><?=$result[3]?></td>
            <td><?=$result[4]?></td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>


<form action="Functions/Add.php" method="post">
    <h3>Добавить новое поле</h3>
    <button type="submit">INSERT</button>
</form>

<form action="Functions/Delete.php" method="post">
    <h3>Удалить поле по ID</h3>
    <input type="text" name="ID">
    <button type="submit">Delete</button>
</form>

<form action="Functions/Update.php" method="post">
    <h3>Заменить значение столбца по ID</h3>
    <?php echo "ID: "; ?><input type="text" name="ID">
    <?php echo "Coolumn name: "; ?><input type="text" name="Stolbec">
    <?php echo "Value: "; ?><input type="text" name="Value">
    <button type="submit">UPDATE</button>
</form>

<form action="Functions/Select.php" method="post">
    <h3>Выборка данных</h3>
    <?php echo "Query: "; ?><input type="text" name="Query">
    <?php echo "Where: "; ?><input type="text" name="Where">
    <button type="submit">SELECT</button>
</form>

