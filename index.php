 <html>
 <head>
 <Title>Bob's Auto Parts: Order Form</Title>
 <style type="text/css">
 	body { background-color: #fff; border-top: solid 10px #009acd;
 	    color: #333; font-size: .85em; margin: 20; padding: 20;
 	    font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
 	}
	h1, h2 { color: #00688b; margin-bottom: 0; padding-bottom: 0; }
 	h1 { font-size: 2em; }
 	h2 { font-size: 1.75em; }
 	h3 { font-size: 1.2em; }
 	div { background-color: #F7F7F7; margin-top: 0.75em; max-width: 400px; padding: 20; margin: 20}
	input[type=submit] { 
		background-color: #009acd;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		width: 400px;
		cursor: pointer;}
 </style>
 </head>
 <body>
 <div>
 <h1>Bob's Auto Parts</h1>
 <h2>Order Form</h2>
 <p>Please enter your details and then click <strong>Submit</strong> to enter your order.</p>
 <form  action="welcome.php" method="post">
 
	<input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>"><br/><br/>
	<input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>"><br/><br/>
	<input type="number" name="tyres" placeholder="# of tyres" value="<?php echo $tyres;?>"><br/><br/>
    <input type="submit" name="Calculate"><br/>
 
 </form>
 </div>
 </body>
 </html>