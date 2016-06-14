<?php
require 'minium_log.php';
 if((isset($_POST['uname'])&&isset($_POST['pass'])&&isset($_POST['type'])))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		if($_POST['type']=='m')
		{
			$query="SELECT * FROM `Manager_DB` WHERE `uname`='$uname' AND `password`='$pass'";
			if($res=mysql_query($query))
			{	
				if($val=mysql_num_rows($res))
				{	$val=mysql_fetch_assoc($res);
					include 'session.php';
					$_SESSION['uname']=$uname;
					$_SESSION['mid']=$val['mid'];
					$_SESSION['mname']=$val['mname'];
					$_SESSION['designation']=$val['designation'];
					$_SESSION['type']='m';
					if(is_null($val['img_dp']))
					{
						$_SESSION['type']='null';
					}
					else
					{
						$_SESSION['type']='null';
					}
					header('Location: files/home');
				}
				else
				{
					echo "<center style='color:red;'>Wrong Password or Id</center>";
				}
			}
			else
			{
				echo "<center style='color:red;'>Wrong Password or Id</center>";
			}
		}
		else if($_POST['type']=='e')
		{
			$query="SELECT * FROM `emp_db` WHERE `uname`='$uname' AND `password`='$pass'";
			if($res=mysql_query($query))
			{	
				if($val=mysql_num_rows($res))
				{	$val=mysql_fetch_assoc($res);
					include 'session.php';
					$_SESSION['uname']=$uname;
					$_SESSION['eid']=$val['eid'];
					$_SESSION['name']=$val['name'];
					$_SESSION['designation']=$val['designation'];
					$_SESSION['type']='e';
					header('Location: files/home');
				}
				else
				{
					echo "<center style='color:red;'>Wrong Password or Id</center>";
				}
			}
			else
			{
				echo "<center style='color:red;'>Wrong Password or Id</center>";
			}
		}
	}
	else
	{
		header('Location: index.php');
	}
?>