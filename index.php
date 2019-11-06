<?php
$db_server = 'localhost';
$db_user = 'zsht';
$db_pass = '1234';
$db_name = 'zsht';

function dbConnect($db_server,$db_name,$db_user,$db_pass){
try {
    $db_conn = new PDO('mysql:host='.$db_server.';dbname='.$db_name, $db_user, $db_pass);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}
return $db_conn;
}
    $db_conn = dbConnect($db_server,$db_name,$db_user,$db_pass);
    $db_query = $db_conn->query('select * from uczniowie');
    foreach($db_query as $row){
        echo'<div>';
        echo $row['ID'];
        echo ' - ';
        echo $row['imie'];
        echo ' ';
        echo $row['nazwisko'];
        echo '(';
        echo $row['pesel'];
        echo ')';
        echo '</div>';
    }

aaa



?>