
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
    <?php

    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "Total amount due is: ".($_POST["tyres"]* 110).'<br/>';

    // $servername = "sdeassignment1.database.windows.net";
    // $user="lukesammut";
    // $password="1Password";
    // $dbname="Assignment1";

    $connectionInfo = array("UID" => "lukesammut@sdeassignment1", "pwd" => "{your_password_here}", "Database" => "Assignment1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:sdeassignment1.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    // Create connection
    // $conn = new mysqli($servername,$user,$password,$dbname);

    // $conn = mysqli_init();
    // mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
    // if (mysqli_connect_errno($conn)) {
    // die('Failed to connect to MySQL: '.mysqli_connect_error());
    // }

    if( $conn ) {
        echo "Connection established.<br />";
    } else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
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