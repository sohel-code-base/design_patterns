<?php


namespace App;


class CsvFile extends FileWriter
{
    public function writeToFile($data): bool
    {
        print 'Writing to csv File...' . PHP_EOL;

        print_r($data) . PHP_EOL;

        return true;
    }
}