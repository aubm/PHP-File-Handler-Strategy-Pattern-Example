<?php

namespace FileHandler\ExtractionStrategy;

use FileHandler\File;

class AudioExtractionStrategy implements ExtractionStrategyInterface
{
    public function extract(File $file)
    {
        echo '<p>Extracting audio data ...</p>';
    }
}