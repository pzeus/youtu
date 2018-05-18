#!/bin/sh
url="https://raw.githubusercontent.com/pzeus/youtu/bench.sh"
wget -O bench.sh --no-check-certificate $url
bash bench.sh
echo $url
