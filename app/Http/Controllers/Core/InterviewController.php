<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InterviewController extends Controller
{
    /**
     * Show interview view
     * 
     * @return View
     */
    public function showInterview(): View
    {
        $data = [
            'title'     => 'Interview',
            'id_page'   => 'core-interview'
        ];

        return view('core.interview', $data);
    }
}
