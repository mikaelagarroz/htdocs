<html>
<head>
<title>Radera användare</title>
</head>
<body>
<table cellpadding=1 cellspacing=1>
    <tr>
        <th>Namn</th>
        <th>Email</th>
        <th>ID</th>
    </tr>
<?php
	session_start();
    $db = new Sqlite3('./db/budgetTjanst.db');

	$result = $db->query("SELECT * FROM användare");

	while($row = $result->fetchArray()){
        echo "<tr>
        <td>".$row['namn']."</td>
        <td>".$row['emailadress']."</td>
        <td>".$row['användarID']."</td>

        <td><a href=delete.php?del=".$row['användarID'].">Radera</a></td>";
    }
    ?>
</table>
<a href=index.php>gå till hemsidan</a>

</body>
</html>