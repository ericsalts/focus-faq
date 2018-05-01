<?
include('pg_connect.php');



    $result = pg_query($db_connection, "SELECT * FROM schools LIMIT 1");

    $arr =  pg_fetch_all($result);

    print "<PRE>";
    print_r($arr);
    print "</PRE>";

    
    #print phpinfo();



?>