<?php
session_start();
if(isset($_SESSION['mid']))
{ 
?>
<?php
}
else
{
	//echo "session not found";
	header('Location: ../../index.php');
}
?>