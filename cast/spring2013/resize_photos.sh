# bash

function resize {
    #$1 is path to file
    #$2 is folder to put resized image in
    if [ ! -e $2/$(basename $1) ]; then
        convert -resize 700 $1 $2/$(basename $1)
    else
        echo Skipping $1
    fi
}

for memberphoto in photos_raw/*
do
    resize "${memberphoto}" photos
done

resize photos_raw/cast/cast1.jpg .
resize photos_raw/cast/cast2.jpg .  
