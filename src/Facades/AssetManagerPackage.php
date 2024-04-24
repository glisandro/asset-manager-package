<?php

namespace GLisandro\AssetManagerPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GLisandro\AssetManagerPackage\AssetManagerPackage
 */
class AssetManagerPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GLisandro\AssetManagerPackage\AssetManagerPackage::class;
    }
}
