<?php
if(isset($_SESSION['id']))
{
	session_start();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Rating</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="center_outer">
		<div class="center_inner">
			<div class="center_content">
			<div id="login_to">
			<div active="active" id="manager">Manager</div><div active='none' id="emp">Employee</div>
			</div>
				<div id="admin_login" class="login_block">
					<form action="validate.php" method="post" >
						<table>
							<tr>
								<td>
									Username
								</td>
								<td>
									<input type="text" name="uname">
								</td>
							</tr>
							<tr>
								<td>
									Password
								</td>
								<td>
									<input type="password" name="pass">
								</td>
							</tr>
						</table>
						<input type="submit" name="submit">
						<input type="text" name="type" value="m">
					</form>
				</div>
				<div id="emp_login" class="login_block">
					<form action="validate.php" method="post">
						<table>
							<tr>
								<td>
									Username
								</td>
								<td>
									<input type="text" name="uname">
								</td>
							</tr>
							<tr>
								<td>
									Password
								</td>
								<td>
									<input type="password" name="pass">
								</td>
							</tr>
						</table>
						<input type="submit" name="submit">
						<input type="text" name="type" value="e">
					</form>
					</div>	
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>



