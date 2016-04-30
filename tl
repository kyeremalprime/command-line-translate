#!/bin/sh
for var in "$*"
do
    param=$var
done
curl -d "word=${param}" http://112.124.29.30:5733/translate/translate.php
