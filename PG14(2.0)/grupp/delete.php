<?php
    $db = new Sqlite3('./db/budgetTjanst.db');

	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
        $query = $db->query ("DELETE FROM användare WHERE användarID='$id'");
        header("Location: admin.php");

	}
?>