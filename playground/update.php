<?php
require_once 'connectdb.php';
$id="";
$username="";
$status="";
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = "";
    if(isset($_GET["ID"]) && $_GET["ID"] !='') {
    $id = $_GET["ID"];
    $username=$_GET["usermane"];
    $status= $_GET["status"];
    
    }else{
        echo"id is null";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username =  $status= "";
    $id = $_GET["ID"];
    $username= $_POST["username"];
    $status= $_POST["status"];

    if ($username && $status){
        $strSQL = "UPDATE user SET usermane='".$username ."',status=".$status." WHERE ID=".$id;
        if (($username=="") && ($status == "")){
        echo "ไม่สามารถเพิ่มข้อมูลได้1";
        }else{
        echo $strSQL;
        $result = $myconn->query($strSQL);

        if ($result){
                 echo "เพิ่มข้อมูลสำเร็จ";
        } else {
                 echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
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
    <title>Document</title>
</head>

<body>
    <form action="update.php?ID=<?=$id?>" method="post">
        <table border="1">
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?=$username?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input type="taxt" name="status" value="<?=$status?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="sava"></td>
            </tr>
        </table>
    </form>
</body>
</html>

