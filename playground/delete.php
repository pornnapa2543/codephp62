<?php
require_once 'connectdb.php';
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = "";
    if(isset($_GET["id"]) && $_GET["id"] !=''){
    $id = $_GET["id"];
    $strSQL = "DELETE FROM user WHERE id=".$id;
    $result = $myconn->query($strSQL);
    // echo $strSQL ."<br>";
    // echo $result;
    if ($result) {
        echo "ลบมูลสำเร็จ";
    } else {
        echo "ไม่สามารถลบข้อมูลได้";
    }
    }else{
        echo"id is null";
    }
    // $frmPassword = $_GET["password"];

    // if ($frmUsername && $frmPassword)
    //     $strSQL = "INSERT INTO user(usermane,passwoed_hash,status)";
    // $strSQL .= " VALUES ('" . $frmUsername . "','" . $frmPassword . " ',0)";
    // $result = $myconn->query($strSQL);
    // if ($result) {
    //     echo "เพิ่มข้อมูลสำเร็จ";
    // } else {
    //     echo "ไม่สามารถเพิ่มข้อมูลได้";
    // }
}