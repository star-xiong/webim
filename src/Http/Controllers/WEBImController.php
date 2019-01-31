<?php

namespace Encore\WEBIm\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class WEBImController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('webim::index'));
    }
}