<?php
	$FILENAME=basename(__FILE__);

	function player($file,$width="90%",$height="90%") {
		echo "<body bgcolor=black>";	
		echo "<center><video id=myvideo src=".$file." width=".$width." height=".$height." controls></video></center>";
		
		echo "<button onclick=myvideo.playbackRate=1; type=button >1.0X</button>";
		echo "<button onclick=myvideo.playbackRate=1.25; type=button>1.25</button>";
		echo "<button onclick=myvideo.playbackRate=1.5; type=button>1.5</button>";
		echo "<button onclick=myvideo.playbackRate=2; type=button>2.0</button>";
		echo "<button onclick=myvideo.playbackRate=2.5; type=button>2.5</button>";
		echo "<button onclick=myvideo.playbackRate=3.0; type=button>3.0</button>";
		
		
		echo "</p>";
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

