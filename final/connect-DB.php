



<?php
// mistakes are misspelling database name , username, or passwords
$databaseName = 'TASTHANA_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'tasthana_writer';
$password = 'A0VqDF7WxN3o'; 

$pdo = new PDO($dsn, $username, $password); 
?>

