 <html>
 <head>
 <Title>Bob's Auto Parts: Order Form</Title>
 <style type="text/css">
 	body { background-color: #fff; border-top: solid 10px #009acd;
 	    color: #333; font-size: .85em; margin: 20; padding: 20;
 	    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 	}
	h1 { color: #00688b; margin-bottom: 0; padding-bottom: 0; }
 	h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
 	h1 { font-size: 2em; }
 	h2 { font-size: 1.75em; }
 	h3 { font-size: 1.2em; }
 	form { background-color: #e5e5e5; margin-top: 0.75em; }
 	th { font-size: 1.2em; text-align: left; border: none; padding-left: 0; }
 	td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
	input[type=submit] { 
		background-color: #009acd;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;}
 </style>
 </head>
 <body>
 <h1>Order Form</h1>
 <p>Please enter your details and then click <strong>Submit</strong> to enter your order.</p>
 <form  action="welcome.php" method="post">
 
    First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>"><br/><br/>
    Last Name:  <input type="text" name="lastname" value="<?php echo $lastname;?>"><br/><br/>
    Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyres;?>"><br/><br/>
    <input type="submit" name="Calculate"><br/>
 
 </form>
 </body>
 </html>