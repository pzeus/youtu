<?php
  //获取当前文件所在的绝对目录
  $dir =  dirname(__FILE__);
  //扫描文件夹
  $filelist = scandir($dir);
  //显示

print_r($dir);

print_r($filelist);

?>
