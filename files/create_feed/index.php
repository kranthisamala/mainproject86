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
	<title>create feed</title>
	<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
<link rel="stylesheet" type="text/css" href="../..//css/create_feed.css">
</head>
<body>
<div class="center_outer">
	<div class="center_inner">
		<div class="yellow_decorator center_content">
		</div>
	</div>
</div>
<div id="outer_center">
<div id="inner_center">
	<div id="containt_center">

		<div id="feed_center">
		<div  id="heading">Feedback Form</div>
			<form id="feed_form" method="post" action="feedback">
			<div>
				<input id="eid" name="eid" list="emp_list" placeholder="Employee:">
				<datalist id="emp_list">
					<?php
							$query="SELECT * FROM `emp_db`";
							if($res=mysql_query($query))
							{
								while($row=mysql_fetch_assoc($res))
									{
										$op=$row['name'];
										$eid=$row['eid'];
										echo "<option>$op($eid)</option>";
									}
							}
						?>
				</datalist>
				</input>
			</div>
			<div>
				Punctuality:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="pun">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div>
			Command on Subject:	<select name="com">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div>
				Attitude/Behaviour:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="att">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div>
				<textarea name="text" placeholder="Any other feedback"></textarea>
			</div>
			<div>
				<input type="text"  id="mid" value='<?php $mid=$_SESSION['mid']; echo "$mid";?>' style="display:none;"> </input>
				<input type="button" id="cre_feedbtn" value="submit"></input>
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
	<a href="../mailbox"><div class="round_menu_blocks" data-title="Mail" data-toggle="left">
	<i class="fa fa-envelope-o"></i>
	</div></a>
	<a href="../graphs"><div class="round_menu_blocks" data-title="Graphs" data-toggle="left">
	<i class="fa fa-bar-chart"></i>
	</div></a>
	<a href="../history"><div class="round_menu_blocks" data-title="History" data-toggle="left">
	<i class="fa fa-history"></i>
	</div></a>
	<a href="../logout"><div class="round_menu_blocks" data-title="Logout" data-toggle="left">
	<i class="fa fa-sign-out"></i>
	</div></a>
</div>
<div id="overlay">	
</div>
<span class="hint_set">dscdsfvdfv</span>
<script type="text/javascript" src="../..//js/jquery.js"></script>
<script type="text/javascript" src="../..//js/create_feed.js"></script>
<script type="text/javascript" src="../..//js/base.js"></script>
</body>
</html>
<?php
}
else
{
	header('Location: ../../index.php');
}
?>