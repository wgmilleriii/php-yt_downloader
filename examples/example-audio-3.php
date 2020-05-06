<?php
require('youtube-dl.class.php');
try
{
	$mytube = new yt_downloader($video_url);

	$mytube->set_audio_format("wav");        # Change default audio output filetype.
	$mytube->set_ffmpegLogs_active(FALSE);   # Disable Ffmpeg process logging.

	$mytube->download_audio();
}
catch (Exception $e) {
	die($e->getMessage());
}
