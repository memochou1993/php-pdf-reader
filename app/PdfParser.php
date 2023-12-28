<?php

namespace App;

use Smalot\PdfParser\Parser;

class PdfParser
{
    private $parser;

    private $document;

    public function __construct($filename)
    {
        $this->parser = new Parser();
        $this->document = $this->parser->parseFile($filename);
    }

    public function getText()
    {
        $text = $this->document->getText();

        return $text;
    }
}
