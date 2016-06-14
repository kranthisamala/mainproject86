<?php
session_start();
if(isset($_SESSION['mid'])&&true==false)
{ 
	$db_host = "localhost";
$db_username = "root";
$db_pass = "potti@1517";
$db_name = "final_project";
@mysql_connect("$db_host","$db_username","$db_pass") or die ("Problem with sql");
@mysql_select_db("$db_name") or die ("NO database");
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mailbox</title>
<link rel="stylesheet" type="text/css" href="../..//css/mail.css">
<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
</head>
<body>
<div class="center_outer">
	<div class="center_inner">
		<div class="center_content">
		<div id="lable">Send Mail</div>
		<div id="form">
			<form>
			<div id="input_grp1">
			<label for="mailid">
				Choose Mail Id
			</label>
				<input id="mailid" list="ids">
				<datalist id="ids">
						<?php
							$query="SELECT * FROM `emp_db` WHERE 1";
							if($res=mysql_query($query))
							{
								while($res=mysql_fetch_assoc($res))
									{
										$op=$res['name'];
										echo "<option>$op</option>";
									}
							}
						?>
					
				</datalist>
			</div>
			<div id="input_grp2">
				<label for="mail_cntnt">
				Compose mail 
			</label>
				<textarea id="mail_cntnt">
				</textarea>
			</div>
			<div>
				<input type="button" value="submit">
			</div>
			</form>
			</div>
		</div>
	</div>
</div>
<div id="round_menu">
	<div id="menu_button" data-title="Menu" data-toggle="left">
	<i class="fa fa-exclamation"></i>
	</div>
	<a href="../home"><div class="round_menu_blocks" data-title="Home" data-toggle="left">
	<i class="fa fa-home"></i>
	</div></a>
	<a href="../graphs"><div class="round_menu_blocks" data-title="Graphs" data-toggle="left">
	<i class="fa fa-bar-chart"></i>
	</div></a>
	<a href="../history"><div class="round_menu_blocks" data-title="History" data-toggle="left">
	<i class="fa fa-history"></i>
	</div></a>
	<a href="../create_feed"><div class="round_menu_blocks" data-title="Create <br/> Report" data-toggle="left">
	<i class="fa fa-pencil-square-o"></i>
	</div></a>
	<a href="../logout"><div class="round_menu_blocks" data-title="Logout" data-toggle="left">
	<i class="fa fa-sign-out"></i>
	</div></a>
</div>
<div id="overlay">	
</div>
<span class="hint_set">dscdsfvdfv</span>
<script type="text/javascript" src="../..//js/jquery.js"></script>
<script type="text/javascript" src="../..//js/mail.js"></script>
<script type="text/javascript" src="../..//js/base.js"></script>
</body>
</html>
<?php
}
else
{
	//echo "session not found";
	header('Location: ../../index.php');
}
?>