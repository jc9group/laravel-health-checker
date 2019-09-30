<?php

declare(strict_types=1);

namespace PragmaRX\Health;

class ResourcesLocator
{
    protected static $paths = [];
    
    public static function addResourcesPath(string $path)
    {
        self::$paths[] = $path;
    }
    
    public static function getAllPaths(): array
    {
        return self::$paths;
    }
}
