<?php
require('youtube-dl.class.php');
try {
    $mytube = new yt_downloader($video_url, TRUE);

    $video = $mytube->get_video();
    $path_dl = $mytube->get_downloads_dir();

    clearstatcache();
    if($video !== FALSE && file_exists($path_dl . $video))
    {
        print "<a href='". $path_dl . $video ."' target='_blank'>Click, to open downloaded video file.</a>";
    } else {
        print "Oups. Something went wrong.";
    }
}
catch (Exception $e) {
    die($e->getMessage());
}
