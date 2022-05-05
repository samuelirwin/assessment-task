<?php

namespace App\Services;

class StringService {

    public function convertStringToUppercase($string)
    {
        $uppercaseString = strtoupper($string);
        if(!ctype_alpha($uppercaseString))
            return 'Error: String does not only contains alphabets';
        return $uppercaseString;
    }


    public function convertStringToAlternateUpperAndLower($string)
    {
        $arr = str_split($string);

        $result = join(array_map(function($char, $i) {
            return $i % 2 ? strtoupper($char) : strtolower($char);
        }, $arr, array_keys($arr)));

        return $result;
    }


    public function createCsv($string)
    {
        $arr = str_split($string);

        $data = [$arr];

        $filename = 'output.csv';

        // open csv file for writing
        $f = fopen($filename, 'w');

        if ($f === false) {
            die('Error opening the file ' . $filename);
        }

        // write each row at a time to a file
        foreach ($data as $row) {
            fputcsv($f, $row);
        }

        // close the file
        fclose($f);

        return 'CSV created!';
    }

}
