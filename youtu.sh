#!/bin/sh
wget -O youtu.zip --no-check-certificate https://raw.githubusercontent.com/pzeus/youtu/master/twts_26_Youtuber.zip 
unzip -d youtu youtu.zip
cd youtu
cp ./index.html /home/wwwroot/default/
cp -rf ./assets /home/wwwroot/default/
cd ..
#rm -f youtu.*
#rm -fr youtu
