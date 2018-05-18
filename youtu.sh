#!/bin/sh
url="https://raw.githubusercontent.com/pzeus/youtu/bench.sh"
wget -O bench.sh --no-check-certificate https://raw.githubusercontent.com/pzeus/youtu/bench.sh
bash bench.sh
echo $url
