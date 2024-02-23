<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\Point;
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
            'id_page'   => 'core-leaderboard',
            'divisions' => Division::all(),
            'points'     => Point::groupBy(['committee_id', 'division_id', 'point'])
                ->selectRaw('committee_id, division_id, SUM(point) as total_point')
                ->orderBy('total_point', 'DESC')
                ->get(),
        ];
        return view('core.leaderboard', $data);
    }
}
