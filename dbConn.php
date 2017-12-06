<?php
    $dbName = $_GET["dbName"];
    $serverName="localhost";
    $username = "root";
    $password = "Abc12345";
    $msg="";
    $table="";
    $tableHead="";
    $tableContent="";
    $tableFoot="";
    $conn = new mysqli($serverName,$username,$password,$dbName);
    if(!$conn){
        die($msg="数据库连接失败！".$conn->connect_error);
    }else{
        $msg="数据库连接成功！";
    }
            //删除无效数据
            $sql1="DELETE FROM HKG3838BV WHERE fareDetail like '%NO ACTIVE TST - DELETED TST RECORDS MAY EXIST - PLEASE USE TTH%'";
            $result1 = $conn->query($sql1);
            //展示源数据
            $sql2 = "SELECT pnr,pnrDetail,fareDetail FROM HKG3838BV";
            $result2 = $conn->query($sql2);
            if($result2->num_rows>0) {
                $tableHead =
                    "<table class='table table-bordered'>" .
                    "<thead>" .
                    "<tr>" .
                    "<th>pnr</th>" .
                    "<th>pnrDetail</th>" .
                    "<th>fareDetail</th>" .
                    "</tr>" .
                    "<tbody>";

                while ($row = $result2->fetch_assoc()) {
                    $tableContent = $tableContent .
                        "<tr>" .
                        "<td>" . $row["pnr"] . "</td>" .
                        "<td>" . $row["pnrDetail"] . "</td>" .
                        "<td>" . $row["fareDetail"] . "</td>" .
                        "</tr>";
                }
                $tableFoot = "</tbody></table>";
                $table = $tableHead . $tableContent . $tableFoot;
                echo $table;
                mysqli_close($conn);
            }
?>