<?php
die('nie dziala');
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") {
                    rrmdir($dir . "/" . $object);
                } else {
                    unlink($dir."/".$object);
//                    echo $dir . '/' . $object.PHP_EOL;
                }
            }
            reset($objects);
            rmdir($dir);
//            echo $dir.PHP_EOL;
        }
    }
}

rrmdir('/var/www/advoxstudio.com/var/cache/');