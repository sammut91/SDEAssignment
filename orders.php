<<html>
<head>
<title> Bob's Auto Parts: Order List</title>
<style type="text/css">
table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
 </style>
</head>
<<body>

<?php 
        // From the blog-post
$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value)
{
    if (strpos($key, "MYSQLCONNSTR_") !== 0)
    {
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);

    echo $value;
}

define('DB_NAME', $connectstr_dbname);
define('DB_USER', $connectstr_dbusername);
define('DB_PASSWORD', $connectstr_dbpassword);
define('DB_HOST', $connectstr_dbhost);

$dbConnection = $dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbConnection)
{
    echo "Successfully connected to the database.\n";
}
else
{
    echo "Failed to connect to the database.\n";
}

$result = mysqli_query($dbConnection,"SELECT * FROM orders");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table cellpadding="0" cellspacing="0" class="db-table">>
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}

/* show tables */
// $result = mysqli_query($dbConnection, 'SHOW TABLES') or die('cannot show fucking tables');
// while($tableName = mysqli_fetch_row($result)) {

// 	$table = $tableName[0];
	
// 	echo '<h3>',$table,'</h3>';
// 	$result2 = mysqli_query($dbConnection, 'SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
// 	if(mysqli_num_rows($result2)) {
// 		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
// 		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
// 		while($row2 = mysqli_fetch_row($result2)) {
// 			echo '<tr>';
// 			foreach($row2 as $key=>$value) {
// 				echo '<td>',$value,'</td>';
// 			}
// 			echo '</tr>';
// 		}
// 		echo '</table><br />';
// 	}
// }

mysqli_close($dbConnection);
?>
</html>