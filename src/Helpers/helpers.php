<?php


if (!function_exists('vextension_asset')) {
    function voyager_asset($path, $secure = null)
    {
        return route('voyager.vextension_assets').'?path='.urlencode($path);
    }
}
