
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="lib/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="lib/css/main.css" type="text/css"/>
    <!--<script type="text/javascript" src="lib/js/main.js"></script>-->
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/js/alert.js"></script>
    <script type="text/javascript" src="lib/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <title>Home page</title>
</head>
<body>
<h4>Step1 ： 连接数据库</h4>
        <select id="dbName" name="dbName">
            <option>test</option>
            <option>production</option>
        </select>
        <input id="conn" type="button"  class="btn btn-danger" onclick="connDB()" value="连接数据库"/>

<h4>Step2 ： 展示源数据</h4>
    <div id="originalData"></div>
<h4>Step3 : 分行</h4>

            <?php

            //将/r/n替换成 囧
/* $sql = "UPDATE hkg3838bv SET pnrDetail = replace(replace(pnrDetail,char(10),'囧'),char(13),''), fareDetail = replace(replace(fareDetail,char(10),'囧'),char(13),'')";
            $sql = "UPDATE hkg3838bv_test SET pnrDetail = replace(replace(pnrDetail,char(10),'囧'),char(13),''), fareDetail = replace(replace(fareDetail,char(10),'囧'),char(13),'') limit 1";
            $conn->query($sql);
            $sql = "SELECT pnrDetail,fareDetail FROM hkg3838bv_test limit 1";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                $pnrDetail = $row["pnrDetail"];
                $fareDetail = $row["fareDetail"];
//                var_dump($pnrDetail."<br>".$fareDetail);
                $arrLines=explode("囧",$pnrDetail); //分行并存入数组
//                var_dump(count($arrLines));
                $lineNums = count($arrLines);
                $n=0;
                while($n<$lineNums){
                    echo $arrLines[$n]. "<br>";
                    $n=$n+1;
                }*/

                //打印每行
//                while($row = $result -> fetch_assoc()){
//                        echo "<tr>"."<td>". $row["pnr"]."</td>"."<td>". $row["pnrDetail"]."</td>"."<td>". $row["fareDetail"]."</td>"."</tr>";
////                    print $row["pnrDetail"];
//                }


//            }


            ?>



</body>
</html>