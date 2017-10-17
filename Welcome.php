
<html>
<head>
<title>Big Book Store: Order Result</title>
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

    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "Total amount due is: ".($_POST["books"]* 110).'<br/>';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $books = $_POST['books'];
    $id = time(void);
    $amount = $_POST["books"]* 110; //version two

    $sql = "INSERT INTO orders (firstname, id, lastname, books, amount)
    VALUES ('$firstname', '$id', '$lastname', '$books', '$amount')";

    if ($dbConnection->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $dbConnection->error;
    }

    mysqli_close($dbConnection);

    ?>
</body>
</html>