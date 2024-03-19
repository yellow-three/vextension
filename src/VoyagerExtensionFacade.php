<?php

namespace YellowThree\VoyagerExtension;

use Illuminate\Support\Facades\Facade;

/**
 * @see \YellowThree\VoyagerExtension\Skeleton\SkeletonClass
 */
class VoyagerExtensionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vextension';
    }
}
