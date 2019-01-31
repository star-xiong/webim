<?php

namespace Encore\WEBIm;

use Encore\Admin\Extension;

class WEBIm extends Extension
{
    public $name = 'webim';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Webim',
        'path'  => 'webim',
        'icon'  => 'fa-gears',
    ];
}