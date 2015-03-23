<?php

namespace FileHandler\ExtractionStrategy;

use FileHandler\File;

class VideoExtractionStrategy implements ExtractionStrategyInterface
{
    public function extract(File $file)
    {
        echo '<p>Extracting video data ...</p>';
    }
}