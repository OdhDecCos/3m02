<!DOCTYPE html>
<html lang="en">

<head>
    <title>IHM Sudriabotik</title>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Value</th>
        </tr>
    <?php
$username = "admin";
$password = "admin";
$database = "test";
$mysqli = new mysqli("localhost", $username, $password, $database);
if ($mysqli -> connect_errno) {
	echo "Connection error: " . $mysqli -> connect_error;
	exit();
}

if ($result = $mysqli -> query("SELECT * FROM test")) {
	while($row = $result -> fetch_row()) {
		echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
	}
	$result -> close();	
}

$mysqli -> close();
    ?>
    </table>
</body>

</html>
