<?php

require_once 'bootstrap.php';

$picasa_handler = new \FileHandler\PicasaHandler();
$soundcloud_handler = new \FileHandler\SoundCloudHandler();
$youtube_handler = new \FileHandler\YoutubeHandler();
$dailymotion_handler = new \FileHandler\DailymotionHandler();
$dropbox_handler = new \FileHandler\DropboxHandler();

$image_extraction_strategy = new \FileHandler\ExtractionStrategy\ImageExtractionStrategy();
$audio_extraction_strategy = new \FileHandler\ExtractionStrategy\AudioExtractionStrategy();
$video_extraction_strategy = new \FileHandler\ExtractionStrategy\VideoExtractionStrategy();
$pdf_extraction_strategy = new \FileHandler\ExtractionStrategy\PdfExtractionStrategy();


$picasa_handler->setFile(new \FileHandler\File('/tmp/jFUwRMe.jpg', 'Mon chat.jpg'));
$picasa_handler->setExtractionStrategy($image_extraction_strategy);
$picasa_handler->extractData();
$picasa_handler->publish();
echo '<hr>';

$soundcloud_handler->setFile(new \FileHandler\File('/tmp/dXBgbJLVgx.mp3', 'Pink Floyd.mp3'));
$soundcloud_handler->setExtractionStrategy($audio_extraction_strategy);
$soundcloud_handler->extractData();
$soundcloud_handler->publish();
echo '<hr>';

$youtube_handler->setFile(new \FileHandler\File('/tmp/jDn8HAb.mp4', 'Vacances.mp4'));
$youtube_handler->setExtractionStrategy($video_extraction_strategy);
$youtube_handler->extractData();
$youtube_handler->publish();
echo '<hr>';

$dailymotion_handler->setFile(new \FileHandler\File('/tmp/AZCsNjynt.mp4', 'Podcast.mp4'));
$dailymotion_handler->setExtractionStrategy($video_extraction_strategy);
$dailymotion_handler->extractData();
$dailymotion_handler->publish();
echo '<hr>';

$dropbox_handler->setFile(new \FileHandler\File('/tmp/PKnZiyvf.png', 'Capture.png'));
$dropbox_handler->setExtractionStrategy($image_extraction_strategy);
$dropbox_handler->extractData();
$dropbox_handler->publish();
echo '<hr>';

$dropbox_handler->setFile(new \FileHandler\File('/tmp/3tDwXG.pdf', 'Compte rendu.pdf'));
$dropbox_handler->setExtractionStrategy($pdf_extraction_strategy);
$dropbox_handler->extractData();
$dropbox_handler->publish();