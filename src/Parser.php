<?php

namespace excito\parser;


interface ParserInterface {
    
    public function process(string $url, string $tag):array;
}

