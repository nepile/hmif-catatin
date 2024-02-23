<?php

namespace App\Http\Controllers\Core;

use App\Models\Point;
use App\Models\Division;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            'points'    => Point::with('committee')
                            ->groupBy(['committee_id', 'division_id'])
                            ->selectRaw('committee_id, division_id, SUM(point) as total_point')
                            ->orderBy('total_point', 'DESC')
                            ->get(),
        ];
        return view('core.leaderboard', $data);
    }
}
