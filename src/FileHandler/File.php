<?php

namespace FileHandler;

class File
{
    public $local_file_path;
    public $original_client_name;

    public function __construct($local_file_path, $original_client_name)
    {
        $this->local_file_path = $local_file_path;
        $this->original_client_name = $original_client_name;
    }
}