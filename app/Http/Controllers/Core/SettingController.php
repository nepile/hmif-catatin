<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    /**
     * Show setting view
     * 
     * @return View
     */
    public function showSetting(): View
    {
        $data = [
            'title'     => 'Setting',
            'id_page'   => 'core-setting'
        ];

        return view('core.setting', $data);
    }
}
