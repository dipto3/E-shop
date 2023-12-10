<?php

namespace App\Facades;

use App\CartSetting;
use Illuminate\Support\Facades\Facade;

/**
 * @method static CartSetting getCartData()
 *
 * @see CartSetting
 */
class CartFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'DecathlonCartFacade';
    }
}
