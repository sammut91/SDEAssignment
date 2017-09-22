
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
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

// Custom testing
echo $connectstr_dbname."\n";
echo $connectstr_dbusername."\n";
echo $connectstr_dbpassword."\n";
echo $connectstr_dbhost."\n";

$dbConnection = $dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbConnection)
{
    echo "Successfully connected to the database.\n";
}
else
{
    echo "Failed to connect to the database.\n";
}

    // echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    // echo "Total amount due is: ".($_POST["tyres"]* 110).'<br/>';

    // $connectionInfo = array("UID" => "phpappuser@sdeassignment1", "pwd" => "1Password", "Database" => "Assignment1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    // $serverName = "tcp:sdeassignment1.database.windows.net,1433";
    // $conn =mysqli_init(); 
    // mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "assignment1sde-mysqldbserver.mysql.database.azure.com", "mysqldbuser@assignment1sde-mysqldbserver", {your_password}, {your_database}, 3306);

    // // Create connection
    // // $conn = new mysqli($servername,$user,$password,$dbname);

    // // $conn = mysqli_init();
    // // mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
    // // if (mysqli_connect_errno($conn)) {
    // // die('Failed to connect to MySQL: '.mysqli_connect_error());
    // // }

    // if( $conn ) {
    //     echo "Connection established.<br />";
    // } else{
    //     echo "Connection could not be established.<br />";
    //     die( print_r( sqlsrv_errors(), true));
    // }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $tyres = $_POST['tyres'];

    $sql = "INSERT INTO orders (firstname, lastname, noOftyres)
    VALUES ('$firstname', '$lastname', '$tyres')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    ?>
</body>
</html>