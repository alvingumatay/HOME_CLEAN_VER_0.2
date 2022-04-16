
<!DOCTYPE html>
<html>
<head>
	<title> Admin || Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel = "shortcut icon" href = "../uploads/cicon.png" />
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link href="css/customize.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/style4.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
</head>
<body>
	<header>
    	<div class="container">
    		<div id="branding">
    			<h1> 
                <span class="highlight">ADMIN</span> |
                 HCS
    			</h1>
    		</div>
    	</div>
    	<br/>	
</header>
<div class="container">
<br><br><br>
<div class="clsDiv">
	<h4><font color="white">Admin</font></h4>
	<hr/>
	<form id="frmLogin" method="post" action="login.php">
		<label for="email" ><font color="white">Email</font></label>
		<input class="clsTxt" type="text" name="username" placeholder="Enter email">
		<label for="password"><font color="white">Password</font></label>
		<input class="clsTxt" type="text" name="password" placeholder="Enter password">
		<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
	</form>
</div>
</div>
</body>
</html>
