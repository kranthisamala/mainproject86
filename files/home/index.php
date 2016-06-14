<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
	<title>
		Securifi
	</title>
</head>
<?php
session_start();
if(isset($_SESSION['mid']))
{ 
?>
	<body>
		<div id="icon"></div>
		<div class="tile_outer">
			<div class="tile_inner">
				<div id="menu">
					Menu
				</div>
				<div class="tile_content">
					<div class="tiles profile" title="view your profile"> 
						<div class="info" id="profile">
							<span>Profile</span>
							<div class="icon"><img id="profile_icon" src="../../attachments/profile.png"/></div>
							<div>
								<table style="border-spacing: 0px;">
									<tr>
										<td>
											Name:
										</td>
										<td>
											<?php echo $_SESSION['mname']?>
										</td>
									</tr>
									<tr>
										<td>
											Designation:
										</td>
										<td>
											<?php echo $_SESSION['designation']?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="tiles mail_box" title="mail someone">
						<div class="info" id="mailbox">
							<span>Mail Box</span>
						</div>
					</div>
					<div class="tiles create_feed" title="provide your report about employee">
						<div class="info" id="create_feed">
							Create Employee Report
						</div>
					</div>
					<div class="tiles graph" title="view employee rating graphs">
						<div class="info" id="graphs">
							Graphs
						</div>
					</div>
					<div class="tiles history" title="view your issued reports">
						<div class="info" id="history">
							History
						</div>
					</div>
					<div class="tiles logout" title="logout">
						<div class="info" id="logout">
							Logout
						</div>
					</div>
				</div>
			</div>
		</div>

<span class="hint_set">dscdsfvdfv</span>
	<script type="text/javascript" src="../..//js/jquery.js"></script>
	<script type="text/javascript" src="../..//js/main.js"></script>
	<script type="text/javascript" src="../..//js/base.js"></script>
	</body>
	<!-- ------------------------------------------------------------------------------------------ -->
	<?php
}
else if(isset($_SESSION['eid']))
{
?>
		<body>
		<div id="icon"></div>
		<div class="center_outer">
			<div class="center_inner">
				<div class="yellow_decorator center_content">
					hello boys
				</div>
			</div>
		</div>
		<div class="tile_outer">
			<div class="tile_inner">
				<div id="menu">
					Menu
				</div>
				<div class="tile_content">
					<div class="tiles profile" title="view your profile"> 
						<div class="info" id="profile">
							<span>Profile</span>
							<div class="icon"><img id="profile_icon" src="../../attachments/profile.png"/></div>
							<div>
								<table style="border-spacing: 0px;">
									<tr>
										<td>
											Name:
										</td>
										<td>
											<?php echo $_SESSION['name']?>
										</td>
									</tr>
									<tr>
										<td>
											Designation:
										</td>
										<td>
											<?php echo $_SESSION['designation']?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="tiles mail_box" title="mail someone">
						<div class="info" id="mailbox">
							<span>Mail Box</span>
						</div>
					</div>
					<div class="tiles create_feed" title="provide your report about employee">
						<div class="info" id="history">
							Employee Report
						</div>
					</div>
					<div class="tiles graph" title="view employee rating graphs">
						<div class="info" id="graphs">
							Graphs
						</div>
					</div>
					<div class="tiles logout" title="logout">
						<div class="info" id="logout">
							Logout
						</div>
					</div>
				</div>
			</div>
		</div>

<span class="hint_set">dscdsfvdfv</span>
	<script type="text/javascript" src="../..//js/jquery.js"></script>
	<script type="text/javascript" src="../..//js/main.js"></script>
	<script type="text/javascript" src="../..//js/base.js"></script>
	</body>
<?php
}
else
{
	//echo "session not found";
	header('Location: ../../index.php');
}
?>
</html>
