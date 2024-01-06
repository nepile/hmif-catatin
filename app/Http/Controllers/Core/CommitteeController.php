<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommitteeController extends Controller
{
    /**
     * Show committee view
     * 
     * @return View
     */
    public function showCommittee(): View
    {
        $data = [
            'title'     => 'Committee',
            'id_page'   => 'core-committee'
        ];
        return view('core.committee', $data);
    }
}
