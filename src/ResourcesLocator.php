<?php

declare(strict_types=1);

namespace PragmaRX\Health;

class ResourcesLocator
{
    protected static $paths = [];
    protected static $overriddenEnabledResources = [];
    
    public static function addResourcesPath(string $path)
    {
        self::$paths[] = $path;
    }
    
    public static function getAllPaths(): array
    {
        return self::$paths;
    }
    
    public static function addOverriddenEnabledResource(string $resourceName)
    {
        self::$overriddenEnabledResources[] = $resourceName;
    }
    
    public static function getEnabledResources(): array
    {
        if (!empty(self::$overriddenEnabledResources)) {
            return self::$overriddenEnabledResources;
        }
        
        return config('health.resources.enabled');
    }
}
