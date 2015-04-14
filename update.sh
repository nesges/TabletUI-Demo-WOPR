cp -a ../tui/room/* php/room/
rm php/room/test*.php
rm php/room/daydream.php

cp -a ../tui/css/* html/css
unlink html/css/jquery-ui.min.css
cp -a ../tui/js/* html/js
unlink html/js/jquery.min.js

mkdir download
cd download
for p in ../php/room/*.php; do r=`echo "$p"|sed -s "s#../php#http://wopr/tui#"`; wget -q -k $r; done;
rm ui.php
for p in *.php; do mv "$p" "`echo \"$p\"|sed -s 's#\.php$#.html#'`"; done;
cd ..

rm html/room/*
mv download/* html/room/
rm -r download

for h in html/room/*.html
    do b=`basename "$h"`
    p=`echo "$b"|sed -s 's#\.html$#.png#'`
    if [ ! -e "screenshots/$p" ]
        then echo "$p is missing"
    fi
done
