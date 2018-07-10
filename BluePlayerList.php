<?php
	function player($file,$width="100%",$height="100%") {
		echo "<body bgcolor=black>";
		echo "<video id=my-video src=".$file." width=".$width." height=".$height." controls></video>";
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
			echo "<p><a href=BluePlayerList.php?status=play&playfile=".$value.">".$value."</a>";
		}
	}
?>

