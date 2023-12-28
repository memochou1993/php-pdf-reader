<?php

require __DIR__.'/vendor/autoload.php';

use App\PdfParser;

$parser = new PdfParser('./example.pdf');
$text = $parser->getText();

print_r($text);
