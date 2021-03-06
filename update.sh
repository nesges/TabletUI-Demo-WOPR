cp ../secrets.php ../secrets_save.php
cp ../secrets_public.php ../secrets.php

cp -a ../tui/room php
cp -a ../tui/small php
mv php/room/system-calendar-demo.php php/room/system-calendar.php
rm php/room/test*.*
rm php/room/daydream.php

cp -a ../tui/css html
cp -a ../tui/js/ html
cp -a ../tui/fonts/ html
cp -a ../tui/images/ html

# room
mkdir download
cd download
for p in ../php/room/*.php; do r=`echo "$p"|sed -s "s#../php#http://wopr/tui#"`; wget -q $r; done;
rm ui.php
for p in *.php; do mv "$p" "`echo \"$p\"|sed -s 's#\.php$#.html#'`"; done;
cd ..
rm -r html/room/*
mv download/* html/room/
rm -r download

# small
mkdir download
cd download
for p in ../php/small/*.php; do r=`echo "$p"|sed -s "s#../php#http://wopr/tui#"`; wget -q $r; done;
rm ui.php
for p in *.php; do mv "$p" "`echo \"$p\"|sed -s 's#\.php$#.html#'`"; done;
cd ..
rm -r html/small/*
mv download/* html/small/
rm -r download

for h in html/room/*.html
    do b=`basename "$h"`
    p=`echo "$b"|sed -s 's#\.html$#.png#'`
    if [ ! -e "screenshots/$p" ]
        then echo "$p is missing"
    fi
done

for p in screenshots/*.png
    do convert -resize 400x400 "$p" "screenshots/small/`basename $p`"
done

mv ../secrets_save.php ../secrets.php
