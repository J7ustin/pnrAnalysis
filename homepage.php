
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
<body style="width:1280px; background-color: whitesmoke;">
    <div style="width:1280px; margin-top: 20px;padding: 20px; background-color: white;">
        <h4>Step0 ： 上传数据</h4>
        <div style="width:600px;margin-left:20px; padding:20px;">
            1.利用Navicat for MySQL 工具，将EXCEL表格上传至数据库；<br>2.注意数据格式为VARCHART(9999),栏目名分别为pnr,pnrDetail,fareDetail;
        </div>
    </div>

    <div style="width:1280px; margin-top: 20px;padding: 20px; background-color: white;">
        <h4>Step1 ： 连接数据库</h4>
        <div class="col-xs-4">
            <select id="dbName" name="dbName" class="form-control col-xs-3">
                <option>test</option>
                <option>production</option>
            </select>
        </div>
        <br>
        <br>
        <div class="col-xs-4">
            <input id="conn" type="button"  class="btn btn-danger btn-block" onclick="connDB()" value="连接数据库"/>
        </div>
        <br><br>
        <div id="connStatusMsg"></div>


    </div>

    <div style="width:1280px; margin-top: 20px;padding: 20px; background-color: white;">
    <h4>Step2 ： 展示源数据</h4>

        <div>
            <input type="button"  class="btn btn-danger" onclick="originalData()" value="展示"/>
            <div id="originalData"></div>
        </div>
    </div>

    <div style="width:1280px; margin-top: 20px;padding: 20px; background-color: white;">
        <h4>Step3 : 分行</h4>
    </div>


            <?php

            //将/r/n char(10)char(13)替换成 金
/* $sql = "UPDATE hkg3838bv SET pnrDetail = replace(replace(pnrDetail,char(10),'金'),char(13),''), fareDetail = replace(replace(fareDetail,char(10),'金'),char(13),'')";
            $sql = "UPDATE hkg3838bv_test SET pnrDetail = replace(replace(pnrDetail,char(10),'金'),char(13),''), fareDetail = replace(replace(fareDetail,char(10),'金'),char(13),'') limit 1";
            $conn->query($sql);
            $sql = "SELECT pnrDetail,fareDetail FROM hkg3838bv_test limit 1";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                $pnrDetail = $row["pnrDetail"];
                $fareDetail = $row["fareDetail"];
//                var_dump($pnrDetail."<br>".$fareDetail);
                $arrLines=explode("金",$pnrDetail); //分行并存入数组
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