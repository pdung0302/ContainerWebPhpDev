<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Advanced Web Development K15-N02</title>
	</head>
	<body>
		<?php 
		
		sayHello('hello  K15');
			
	
			
		?>
		<form action="checkLogin.phd" method="POST">
		<a>Username:</a><input type=text name="userName" size =16>
		<a>Password:</a><input type=password name="passWord" size =16>
		<input type=submit name=submit value="Login">
		</form>
	</body>
</html>