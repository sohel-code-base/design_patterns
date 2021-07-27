<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$jsonFile = new \App\JsonFile();
$csvFile = new \App\CsvFile();

$processor = new \App\RandomProcessor($csvFile);
$processor->process(['foo' => 'bar']);