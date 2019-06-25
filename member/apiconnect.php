<?php
include('conn.php');

if($_POST['mode']=='Register'){
$sql = "INSERT INTO user (username, password, IDcard, created)
VALUES ('".$_POST['username']"','".$_POST['password']"','".$_POST['IDcard']."',NOW());";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
	}else
	{
		echo 'Pass';
	}

}

?>