<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoordinatorController extends Controller
{
    /**
     * Show coordinator view
     * 
     * @return View
     */
    public function showCoordinator(): View
    {
        $data = [
            'title'     => 'Coordinator',
            'id_page'   => 'core-coordinator'
        ];
        return view('core.coordinator', $data);
    }
}
