<?php
	function player($file,$width="70%",$height="70%") {
		echo "<body bgcolor=black>";
		echo "<center><video id=my-video src=".$file." width=".$width." height=".$height." controls></video></center>";
		echo "</body>";
	}
	if(@$_GET["status"]=="play")
	{	
		player($_GET["playfile"]); 
		echo "<a href=BluePlayerList.php>BACK</a>";
	}
	else
	{
		//get dir
		$dir =  dirname(__FILE__);
		//get filelist
		$filelist = scandir($dir);
		//display filelist 
		foreach($filelist as $key=>$value)
		{
			echo "<br><a href=BluePlayerList.php?status=play&playfile=".$value.">".$value."</a>";
		}
	}
?>

