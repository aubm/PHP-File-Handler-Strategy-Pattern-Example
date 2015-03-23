<?php

namespace FileHandler\ExtractionStrategy;

use FileHandler\File;

class PdfExtractionStrategy implements ExtractionStrategyInterface
{
    public function extract(File $file)
    {
        echo '<p>Extracting pdf file data ...</p>';
    }
}