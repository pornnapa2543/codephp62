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
    <title>Document</title>
</head>

<body>
    <table border="3" width="100%">
        <tr>
            <td> ลำดับ</td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td>เเก้ไข</td>
            <td> ลบ</td>
        </tr>
        <?php
        while ($row = $result->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $row["ID"];?></td>
                <td><?php echo $row["usermane"];?></td>
                <td><?php echo $row["status"];?></td>
                <td>edit</td>
                <td><a href="delete.php?id=<?php echo $row["ID"];?>">delete</a></td>
            </td>
        <?php
        }
        ?>

    </table>
</body>