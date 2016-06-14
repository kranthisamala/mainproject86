<?php
session_start();
if(isset($_SESSION['mid']))
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
	<title>History</title>
<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
<link rel="stylesheet" type="text/css" href="../..//css/history.css">
</head>
<body>
<div class="center_outer">
	<div class="center_inner">
		<div class="center_content">
		<div id="heading">History</div>
		<div id="table">
			
			<table>
				<tr>
					<th>
						EmpId
					</th>
					<th>
						punctuality
					</th>
					<th>
						Command on sub
					</th>
					<th>
						Attitude/<br/>Behaviour
					</th>
					<th>
						Overall rating
					</th>
					<th>
						Text
					</th>
					<th>
						TimeStamp
					</th>

				</tr>
				<?php
			$mid=$_SESSION['mid'];
				$query="SELECT * FROM `feedback` WHERE `mid`='$mid'";
				if($res=mysql_query($query))
				{
					while($row=mysql_fetch_assoc($res))
					{
						echo "<tr>";
						echo "<td>";
						echo $row['eid'];
						echo "</td>";
						echo "<td>";
						echo $row['punc'];
						echo "</td>";
						echo "<td>";
						echo $row['com'];
						echo "</td>";
						echo "<td>";
						echo $row['att'];
						echo "</td>";
						echo "<td>";
						echo $row['total'];
						echo "</td>";
						echo "<td>";
						echo $row['text'];
						echo "</td>";
						echo "<td>";
						echo $row['time'];
						echo "</td>";
						echo "</tr>";
					}
				}
			?>
			</table>
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
	<a href="../mailbox"><div class="round_menu_blocks" data-title="Mail" data-toggle="left">
	<i class="fa fa-envelope-o"></i>
	</div></a>
	<a href="../graphs"><div class="round_menu_blocks" data-title="Graphs" data-toggle="left">
	<i class="fa fa-bar-chart"></i>
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
<!-- --------------------------------------------------------------------------------- -->
<?php
}

else if(isset($_SESSION['eid']))
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
	<title>Employee Report</title>
<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
<link rel="stylesheet" type="text/css" href="../..//css/history.css">
</head>
<body>
<div class="center_outer">
	<div class="center_inner">
		<div class="center_content">
		<div id="heading">Employee Report</div>
		<div id="table">
			
			<table>
				<tr>
					<th>
						ManagerId
					</th>
					<th>
						punctuality
					</th>
					<th>
						Command on sub
					</th>
					<th>
						Attitude/<br/>Behaviour
					</th>
					<th>
						Overall rating
					</th>
					<th>
						Text
					</th>
					<th>
						TimeStamp
					</th>

				</tr>
				<?php
			$eid=$_SESSION['eid'];
				$query="SELECT * FROM `feedback` WHERE `eid`='$eid'";
				if($res=mysql_query($query))
				{
					while($row=mysql_fetch_assoc($res))
					{
						echo "<tr>";
						echo "<td>";
						echo $row['mid'];
						echo "</td>";
						echo "<td>";
						echo $row['punc'];
						echo "</td>";
						echo "<td>";
						echo $row['com'];
						echo "</td>";
						echo "<td>";
						echo $row['att'];
						echo "</td>";
						echo "<td>";
						echo $row['total'];
						echo "</td>";
						echo "<td>";
						echo $row['text'];
						echo "</td>";
						echo "<td>";
						echo $row['time'];
						echo "</td>";
						echo "</tr>";
					}
				}
			?>
			</table>
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
	<a href="../mailbox"><div class="round_menu_blocks" data-title="Mail" data-toggle="left">
	<i class="fa fa-envelope-o"></i>
	</div></a>
	<a href="../graphs"><div class="round_menu_blocks" data-title="Graphs" data-toggle="left">
	<i class="fa fa-bar-chart"></i>
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