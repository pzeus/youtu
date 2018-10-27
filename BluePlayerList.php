<?php
	$FILENAME=basename(__FILE__);

	function player($file,$width="70%",$height="70%") {
		echo "<body bgcolor=black>";
		echo "<script>";
		echo "var video = document.getElementById('video');";
		echo "function getPlaySpeed() {";"
		echo "alert(video.playbackRate);//获取视频/音频的播放速度";
		echo "}";
		echo "function setPlaySpeed() {";
		echo "video.playbackRate=2;//设置视频/音频的播放速度";
		echo "}"
		echo "</script>";
		echo "<center><video id=myvideo src=".$file." width=".$width." height=".$height." controls></video></center>";
		echo "<p><button onclick=setPlaySpeed() type=button>将视频设置为以快速播放</button></p>";
		echo "</body>";
	}
	if(@$_GET["status"]=="play")
	{	
		player($_GET["playfile"]); 
		echo "<a href=".$FILENAME.">BACK</a>";
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
			echo "<br><a href=".$FILENAME."?status=play&playfile=".$value.">".$value."</a>";
		}
	}
?>

