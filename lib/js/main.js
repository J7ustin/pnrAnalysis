//sql
function connSql() {
    // alert("123");
    var conn = new ActiveXObject("ADODB.Connnection");
    var rs = new ActiveXObject("ADODB.Recordset");
    try {
        var connectionString = "Driver={MySQL ODBC 5.1 Driver};OPTION=3;SERVER=locoalhost;Database=pnrAnalysis_test;User=root;Password=xiongmao45;Port=3306";
        conn.open(connectionString);
        WScript.Echo("database connect success!");
    }catch(e){
        WScript.Echo(e.message);
    }finally{
        //
    }
}
