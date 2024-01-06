<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LeaderBoardController extends Controller
{
    /**
     * Show leaderboard view
     * 
     * @return View
     */
    public function showLeaderboard(): View
    {
        $data = [
            'title'     => 'Leaderboard',
            'id_page'   => 'core-leaderboard'
        ];
        return view('core.leaderboard', $data);
    }
}
