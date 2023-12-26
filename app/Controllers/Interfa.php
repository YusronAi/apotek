<?php

namespace App\Controllers;

class Interfa extends BaseController
{
    public function buttons()
    {
        return view('dashboard/buttons');
    }

    public function cards()
    {
        return view('dashboard/cards');
    }

    public function colors()
    {
        return view('dashboard/utilities-color');
    }

    public function borders()
    {
        return view('dashboard/utilities-border');
    }

    public function animations()
    {
        return view('dashboard/utilities-animation');
    }

    public function other()
    {
        return view('dashboard/utilities-other');
    }
}
