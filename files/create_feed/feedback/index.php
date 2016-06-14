<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "potti@1517";
$db_name = "final_project";
@mysql_connect("$db_host","$db_username","$db_pass") or die ("Problem with sql");
@mysql_select_db("$db_name") or die ("NO database");
require 'positive_array.php';
require 'negative_array.php';
if(isset($_POST['eid'])&&isset($_POST['mid'])&&isset($_POST['pun'])&&isset($_POST['com'])&&isset($_POST['att'])&&isset($_POST['text']))
{
	$mid=$_POST['mid'];
	$pun=$_POST['pun'];
	$eid=$_POST['eid'];
	$com=$_POST['com'];
	$att=$_POST['att'];
	$text=$_POST['text'];
	$text=strtolower($text);
	$test_array=explode(".",$text);
	$neg_count=0;
	$pos_count=0;
	for($i=0;$i<count($test_array);$i++)
	{	
		$not=0;
		$very=0;
		$temp=explode(" ",$test_array[$i]);
		for($j=0;$j<count($temp);$j++)
		{
			if("not"==$temp[$j]||"need"==$temp[$j])
			{
				$not=1;
				continue;
			}
			else if("very"==$temp[$j])
			{
				$very=1;
				continue;
			}
			if(in_array($temp[$j], $pos_array))
			{
				if($not==1)
				{
					if($very==1)
					{
						$neg_count++;
						$neg_count++;
						$very=0;
					}
					else
					{
						$neg_count++; 
					}
					$not=0;
				}
				else
				{
					if($very==1)
					{
						$pos_count++;
						$pos_count++;
						$very=0;
					}
					else
						$pos_count++;
				}
			}
			else if(in_array($temp[$j], $neg_array))
			{
				if($not==1)
				{	
					if($very==1)
					{
						$pos_count++;
						$pos_count++;
						$very=0;
					}
					else
					{
						$pos_count++; 		
					}
					$not=0;
				}
				else
				{
					if($very==1)
					{
						$neg_count++;
						$neg_count++;
						$very=0;
					}
					else
						$neg_count++;
				}
			}
		}
	}
	$total=5;
	echo "$pos_count";
	$neg_per=0;
	$pos_per=0;
	if(($neg_count+$pos_count)!=0){
		$neg_per= ($neg_count/($pos_count+$neg_count))*5;
		$pos_per= ($pos_count/($pos_count+$neg_count))*5;
		$total=5+$pos_per-$neg_per;
	}
	$total=$total/2;
	echo "total:$total";

	$temp=($pun+$com+$att)/3;
	echo "temp:$temp";
	$rating=$total+$temp;
	$query="INSERT INTO `feedback`(`eid`, `mid`, `punc`, `com`, `att`, `text`,`negative`,`positive`,`total`) VALUES ('$eid','$mid','$pun','$com','$att','$text','$neg_per','$pos_per','$rating')";
	try{if(mysql_query($query))
		echo "true";
		}
	catch(Exception $er)
	{
		echo '$er->getMessage()';
	}
}
else
{
	echo "get back";
}
?>