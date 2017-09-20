
<html>
<head>
<title> Bob's Auto Parts</title>
</head>

<body>
<form  action="welcome.php" method="post">

FisrtName: <input type="text" name="firstname" value="<?php echo $firstname;?>"><br/><br/>
LastName:  <input type="text" name="lastname" value="<?php echo $lastname;?>"><br/><br/>
Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyres;?>"><br/><br/>
<input type="submit" name="Calculate"><br/>

</form>
</body>
</html>
