<?php

namespace FileHandler\ExtractionStrategy;

use FileHandler\File;

class ImageExtractionStrategy implements ExtractionStrategyInterface
{
    public function extract(File $file)
    {
        echo '<p>Extracting image data ...</p>';
    }
}