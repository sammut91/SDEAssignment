
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php

    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "total amount due is: ".($_POST["tyres"]* 110).'<br/>';

    $servername = "sdeassignment1.database.windows.net";
    $user="lukesammut";
    $password="1Password";
    $dbname="Assignment1";

    // Create connection
    $conn = new mysqli($servername,$user,$password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
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

    $conn->close();

    ?>
</body>
</html>