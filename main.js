/**
 * Created by justin on 2017/12/7.
 */
function connDB() {
    var dbName=$('#dbName option:selected').text();

    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("originalData").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","dbConn.php?dbName="+dbName,true);
    xmlhttp.send();

}