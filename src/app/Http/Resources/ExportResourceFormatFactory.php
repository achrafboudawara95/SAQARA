<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Prophecy\Exception\Doubler\ClassNotFoundException;

class ExportResourceFormatFactory
{
    const NAMESPACE = 'App\\Http\\Resources\\';
    /**
     * @param string $name
     * @return ExportResourceInterface
     * @throws ClassNotFoundException
     */
    public static function make($name): ExportResourceInterface
    {
        $name = Str::ucfirst($name);
        $service = self::NAMESPACE.$name.'\\'."Export{$name}Resource";

        return new $service;
    }
}
