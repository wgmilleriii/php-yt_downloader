<?php
require('youtube-dl.class.php');
try {
    new yt_downloader($video_url, TRUE);
}
catch (Exception $e) {
    die($e->getMessage());
}
