<?php

namespace FileHandler\ExtractionStrategy;

use FileHandler\File;

interface ExtractionStrategyInterface
{
    public function extract(File $file);
}