<?php error_reporting(0); ?>
<?PHP
header("Content-type: text/html; charset=utf-8"); 
//定义常量 btfilename,ininame
define("BTFILENAME", "btini.php");
define("INIFILENAME", "./data.ini");
//读INI文件
function readini($name)
{
  if (file_exists($name)){
    $data = parse_ini_file($name);
    if ($data){
      return $data;
    }
  }else {
    return false;
  }
}
//改写write方法,使用二维数组
function write_ini_file($add_arr, $path) { 
  $content = ""; 
  $loadData=readini(INIFILENAME);
  $assoc_arr=array_merge_recursive($loadData,$assoc_arr);
  foreach ($loadData as $key=>$value) { 
    $content.=strval($key)."= \"".$value."\"\n"; 
  } 
  foreach ($add_arr as $key=>$value) { 
    $content.=strval($key)."= ".$value."\n"; 
  } 
  if (!$handle = fopen($path, 'w')) { 
    return false; 
  } 
  if (!fwrite($handle, $content)) { 
    return false; 
  } 
  fclose($handle); 
  return true; 
}

function write_ini_del_value($assoc_arr, $path,$valueid) { 
  $content = ""; 
  $loadData=readini(INIFILENAME);
  if(empty($loadData))
  {
    echo "ini为空<p>";
  }
  else
  {
  }
  foreach ($loadData as $key=>$value) { 
    if($valueid!=$key)
    {
      $content.=strval($key)."=\"".$value."\"\n"; 
    }
  } 
  if (!$handle = fopen($path, 'w')) { 
    return false; 
  } 
  if (!fwrite($handle, $content)) { 
    return false; 
  } 
  fclose($handle); 
  return true; 
}


?>
<?php

echo "<center><h1>玩客云自定义下载</h1></center>";

if(@$_GET[status]=="save")
{
  $saveData = array("'".@$_POST[title]."'" =>"\"".str_replace(";","",@$_POST[links])."\"");
  write_ini_file($saveData, INIFILENAME);
  header("location:".BTFILENAME);
}

if(@$_GET[status]=="del")
{
  $readData=readini(INIFILENAME);
  write_ini_del_value($readData,INIFILENAME,@$_GET[id]);
}
//load page
$readData=readini(INIFILENAME);

foreach(@$readData as $key => $value){
  echo"<center><h2><a href=".$value.">". $key."</a> <a href=".$value.">[Download]</a>	<a href=".BTFILENAME."?status=del&id=".$key.">[Delete]</a><br></h2></center>";
}  
?>

<html>
  <head>
  </head>
  <body>
    <form action="<?php echo BTFILENAME?>?status=save" method="post">
      <p><center>Add Title: <input type="text" name="title" />
        <p><center>Add Links: <input type="text" name="links" />
          <p><center><input type="submit" />
            </form>
          <p>注意：标题同名时会被覆盖。
<p><a href=http://www.torrent.org.cn/>种子转换</a>
<p><a href=https://tool.lu/urlconvert/>下载地址转换迅雷地址</a>
          </body>
        </html>
