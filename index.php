
<html>
<head>
<title> Bob's Auto Parts</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>

<body>
<form  action="welcome.php" method="post">

First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>"><br/><br/>
Last Name:  <input type="text" name="lastname" value="<?php echo $lastname;?>"><br/><br/>
Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyres;?>"><br/><br/>
<input type="submit" name="Calculate"><br/>

</form>
</body>
</html>
