<?php


namespace App;


class JsonFile extends FileWriter
{
    public function writeToFile($data): bool
    {
        print 'Writing to Json File...' . PHP_EOL;

        sleep(3);

        print json_encode($data) . PHP_EOL;

        return true;
    }
}