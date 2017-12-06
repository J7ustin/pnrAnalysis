<?php
    $dbName = $_GET["dbName"];
    $serverName="localhost";
    $username = "root";
    $password = "Abc12345";
    
    $conn = new mysqli($serverName,$username,$password,$dbName);
    if(!$conn){
        die($msg="数据库连接失败！".$conn->connect_error);
    }else{
        $msg="数据库连接成功！";
    }
    echo "<div class='col-xs-4'><label style='padding: 10px;text-align: center' class='btn-success  btn-block'>".$msg."</label></div><br><br>";

           
?>