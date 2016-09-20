<!DOCTYPE html>
<html lang="en">
  <head>
  <title>GLAD You think you can cook?</title>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/main.css">
  <script src="./js/script.js"></script>

  <script type="text/javascript">

 
  </script>
  </head>
  <body id="bgpage1">
		<div id="login">
			<form action="enter.php"  id="myForm" method='post' name="myForm">
				 <label for="username">Username</label>  <!-- On blurr call the validate function in validate function in script.js  -->
				<input id='username1' name='username' onblur="validate('username', this.value)" type='text' required> &nbsp;&nbsp;&nbsp;&nbsp; <span style="color:red; font-size:12px;" id='username'></span>
				<input type="submit" value="ENTER" > <br>
				<label for="password">Password</label>
				<input id='password1' name='password' onblur="validate('password', this.value)" type='password' required> &nbsp;&nbsp;&nbsp;&nbsp; <span style="color:red; font-size:12px;" id='password'></span>  		
			</form>
		</div> <!-- end login -->
  </body>
</html>