<<html>
<head>
<title> Bob's Auto Parts: Order List</title>
<style type="text/css">
table.db-table 		{ 
    border-right:1px solid #ccc;
    border-bottom:1px solid #ccc; 
    width: 100%; 
}
table.db-table th	{ 
    background-color:#4CAF50; 
    padding:5px; 
    border-left:1px solid #ccc;
    color: white;
    border-top:1px solid #ccc; 
    }
table.db-table td	{ 
    padding:15px; 
    border-left:1px solid #ccc; 
    border-top:1px solid #ccc; 
}
table.db-table tr	{ 
    padding:5px; 
    border-left:1px solid #ccc; 
    border-top:1px solid #ccc; 
}
.center {
		background-color: #F7F7F7;
		border: 5px; 
		border-color: #000;
		margin: auto;
		width: 60%;
		padding: 10px;
	}
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
echo '<div class = "center">';
echo '<table cellpadding="0" cellspacing="0" class="db-table">>
        <tr>';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<th>' . $property->name . '</th>';  //get field name for header
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
echo '</div>';

mysqli_close($dbConnection);
?>
</html>