<?php

namespace App\Enums;

enum Colors : string
{
    case Red = 'R';
    case Green = 'G';
    case Blue = 'B';

    public function getHex(): string
    {
        return match ($this) {
            self::Red => '#FF0000',
            self::Green => '#00FF00',
            self::Blue => '#0000FF',
        };
    }
}
