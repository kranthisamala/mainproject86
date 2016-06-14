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
	<title>Graphs</title>
<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
<link rel="stylesheet" type="text/css" href="../..//css/graph.css">
<style type="text/css">
    #eid{
    	padding:10px;
    }
    
    </style>

</head>
<body>
<div class="center_outer">
  <div class="center_inner">
    <div class="center_content">
    <div id="heading">Graphs</div>
    <div style="position:relative;width:450px;margin:auto;">
<input id="eid" name="eid" list="emp_list" placeholder="Select a Employee:">
				<datalist id="emp_list">
					<?php
							$query="SELECT * FROM `emp_db` WHERE 1";
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

				<?php
if(isset($_GET['eid']))
{
	echo "<div id='chart_div' style='display:block'></div>";
}
else 
	echo "<div id='chart_div' style='display:none'></div>";
?>
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
<span class="hint_set"></span>
<script type="text/javascript" src="../..//js/jquery.js"></script>
<script type="text/javascript" src="../..//js/graph.js"></script>
<script type="text/javascript" src="../..//js/base.js"></script>
<script type="text/javascript" src="js/jsapi.js"></script> 
<script type="text/javascript" src="js/uds_api_contents.js"></script>

<script type="text/javascript">

google.load("visualization", "1", {packages: ["corechart", "timeline"]});
google.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable();
      data.addColumn('datetime', 'X');
      data.addColumn('number', 'positive');
      data.addColumn('number', 'negative');
      data.addColumn('number', 'Total rating');
      data.addRows([
      	<?php
      	if(isset($_GET['eid']))
		{
      		$eid=$_GET['eid'];
      		$query="SELECT * FROM `feedback` WHERE `eid`='$eid' ";
      		if($res=mysql_query($query))
      		{$tmp=0;
      			while($row=mysql_fetch_assoc($res))
      			{	
      				if($tmp>0)echo ',';
      				echo '[new Date("'.$row['time'].'"),'.$row['positive'].','.$row['negative'].','.$row['total'].']';
      				$tmp=$tmp+1;
	      		}
	      	}
	      }
      	?>
      ]);

      var options = {
      	width: 1200, height: 400,
        hAxis: {
          title: 'Timestamp'

        },
        vAxis: {
          title: 'Rating',
          maxValue: 10,
          minValue:0
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
    
</body>
</html>
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
<!-- ------------------------------------------------------------------------------ -->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Graphs</title>
<link rel="stylesheet" href="/securifi_first/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../..//css/base.css">
<link rel="stylesheet" type="text/css" href="../..//css/graph.css">
<style type="text/css">
    #eid{
    	padding:10px;
    }
    
    </style>

</head>
<body>
<div class="center_outer">
  <div class="center_inner">
    <div class="center_content">
    <div id="heading">Graphs</div>
    
<?php 
	echo "<div id='chart_div' style='display:block'></div>";
?>
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
	<a href="../history"><div class="round_menu_blocks" data-title="Employee<br/>Report" data-toggle="left">
  <i class="fa fa-pencil-square-o"></i>
  </div></a>
	<a href="../logout"><div class="round_menu_blocks" data-title="Logout" data-toggle="left">
	<i class="fa fa-sign-out"></i>
	</div></a>
</div>
<div id="overlay">	
</div>
<span class="hint_set"></span>
<script type="text/javascript" src="../..//js/jquery.js"></script>
<script type="text/javascript" src="../..//js/graph.js"></script>
<script type="text/javascript" src="../..//js/base.js"></script>
<script type="text/javascript" src="js/jsapi.js"></script> 
<script type="text/javascript" src="js/uds_api_contents.js"></script>

<script type="text/javascript">

google.load("visualization", "1", {packages: ["corechart", "timeline"]});
google.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable();
      data.addColumn('datetime', 'X');
      data.addColumn('number', 'positive');
      data.addColumn('number', 'negative');
      data.addColumn('number', 'Total rating');
      data.addRows([
      	<?php
      	if(isset($_SESSION['eid']))
		{
      		$eid=$_SESSION['eid'];
      		$query="SELECT * FROM `feedback` WHERE `eid`='$eid' ";
      		if($res=mysql_query($query))
      		{$tmp=0;
      			while($row=mysql_fetch_assoc($res))
      			{	
      				if($tmp>0)echo ',';
      				echo '[new Date("'.$row['time'].'"),'.$row['positive'].','.$row['negative'].','.$row['total'].']';
      				$tmp=$tmp+1;
	      		}
	      	}
	      }
      	?>
      ]);

      var options = {
      	width: 1200, height: 400,
        hAxis: {
          title: 'TimeStamp'

        },
        vAxis: {
          title: 'Rating',
          maxValue: 10,
          minValue:0
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
    
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