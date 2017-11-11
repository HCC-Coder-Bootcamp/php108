<?php

namespace Genesis\Models;

class PrayerMachine
{
    static $width = 40;

    static public function godAsk($question)
    {
        echo PHP_EOL;
        echo str_pad('', self::$width, '*') . PHP_EOL;
        echo ' GOD : ' . $question . PHP_EOL;
        echo str_pad('', self::$width, '*') . PHP_EOL;
    }

    static public function answer(Thing $human, $answer)
    {
        echo PHP_EOL;
        echo str_pad('', self::$width, '=') . PHP_EOL;
        echo ' ' . $human->getName() . ' : ' . $answer . PHP_EOL;
        echo str_pad('', self::$width, '=') . PHP_EOL;
    }
}