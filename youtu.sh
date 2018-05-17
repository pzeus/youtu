#!/bin/sh
wget --no-check-certificate https://raw.githubusercontent.com/pzeus/youtu/master/twts_26_Youtuber.zip
unzip x twts_26_Youtuber.zip
cd twts_26_Youtuber
cp ./index.html /home/wwwroot/default/
cd -rf ./assets /home/wwwroot/default/
cd ..
rm -fr twts_26_Youtuber
