<?php
require_once 'connectdb.php';

 $strSQL = "SELECT `ID`, `usermane`, `passwoed_hash`, `status` FROM `user`";
 $result = $myconn->query ($strSQL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table border="3" width="100%">
        <tr>
            <td> ลำดับ</td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td>เเก้ไข</td>
            <td> ลบ</td>        </tr>
        <?php
        while ($row = $result->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $row["ID"];?></td>
                <td><?php echo $row["usermane"];?></td>
                <td><?php echo $row["status"];?></td>
                <td><a href="update.php?ID=<?= $row["ID"]?>&usermane=<?= $row["usermane"]?>&status=<?= $row["status"];?>"
                 ><i class="fas fa-edit"></i></a> </td>
                <td><a href="delete.php?Id=<?= $row["ID"];?>"><i class="far fa-trash-alt"></i></a></td>
            </td>
        <?php
        }
        ?>

    </table>
</body>