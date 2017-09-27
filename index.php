 <html>
 <head>
 <Title>Bob's Auto Parts: Order Form</Title>
 <style type="text/css">
 	body { background-color: #fff;
 	    color: #333; font-size: .85em; margin: 20; padding: 20;
 	    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 	}
	h1 { color: white; background-color: #009acd; margin-bottom: 0; padding-bottom: 0; text-align: center; }
	h2, h3 { color: #00688b; margin-bottom: 0; padding-bottom: 0; text-align: center; }
 	h1 { font-size: 2em; }
 	h2 { font-size: 1.75em; }
 	h3 { font-size: 1.2em; }
	input[type=submit] { 
		background-color: #009acd;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;}
	input { width: 400px; font-size: 1em; }
	.center {
		background-color: #F7F7F7; 
	 	max-width: 400px;
		border: 5px; 
		border-color: #000;
		margin: auto;
		width: 60%;
		padding: 10px;
	}
 </style>
 </head>
 <body>
 <div class = "center">
 <h1>Bob's Auto Parts</h1>
 <h3>Order Form</h3>
 <p>Please enter your details and then click <strong>Submit</strong> to enter your order.</p>
 <form  action="welcome.php" method="post">
 
	<input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>"><br/><br/>
	<input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>"><br/><br/>
	<input type="number" name="tyres" placeholder="# of tyres" value="<?php echo $tyres;?>"><br/><br/>
    <input type="submit" name="Calculate"><br/>
	<input type="submit" name="Orders" value="View Orders" formaction="orders.php"<br/>

 </form>
 </div>
 </body>
 </html>