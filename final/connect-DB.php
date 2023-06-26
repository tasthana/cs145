



<?php
// mistakes are misspelling database name , username, or passwords
$databaseName = 'TASTHANA_cs145table';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'tasthana_writer';
$password = 'o072RCYY4Q8H'; 

$pdo = new PDO($dsn, $username, $password); 
?>

