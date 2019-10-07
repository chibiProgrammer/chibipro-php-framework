<?php

namespace m;

class TemplateFactory
{
    private $base_directory;

    public function  __construct($base_dir){
        $base_directory = rtrim($base_dir, '/\\',);
        $this->base_directory = $base_directory;
    }

    public function create(string $name, $parames = []): Template{
        return new Template("{$this->base_directory}/_base.phtml", [
            'main' => "{$this->base_directory}/{$name}.phtml"
        ] + $parames);
    }

}