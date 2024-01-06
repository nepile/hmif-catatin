<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OverviewController extends Controller
{
    /**
     * Show overview view
     * 
     * @return View
     */
    public function showOverview(): View
    {
        $data = [
            'title'     => 'Overview',
            'id_page'   => 'core-overview'
        ];

        return view('core.overview', $data);
    }
}
