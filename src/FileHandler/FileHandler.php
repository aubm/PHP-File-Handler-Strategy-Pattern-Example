<?php

namespace FileHandler;

use FileHandler\ExtractionStrategy\ExtractionStrategyInterface;

abstract class FileHandler
{
    /** @var File */
    protected $file;
    /** @var ExtractionStrategyInterface */
    protected $extraction_strategy;

    public function setFile(File $file)
    {
        $this->file = $file;
    }

    public function setExtractionStrategy(ExtractionStrategyInterface $extraction_strategy)
    {
        $this->extraction_strategy = $extraction_strategy;
    }

    public function extractData()
    {
        $this->extraction_strategy->extract($this->file);
    }

    abstract public function publish();
}