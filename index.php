<?php

require_once(__DIR__ . '/vendor/autoload.php');

use iio\libmergepdf\Merger;
use iio\libmergepdf\Pages;

$merger = new Merger;
$merger->addFile(__DIR__ . '/pdfs/foo.pdf', new Pages('1-2'));
$merger->addFile(__DIR__ . '/pdfs/bar.pdf', new Pages('1-2'));
$createdPdf = $merger->merge();
file_put_contents(__DIR__ . '/pdfs/output.pdf', $createdPdf);
