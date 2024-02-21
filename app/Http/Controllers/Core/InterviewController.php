<?php

namespace App\Http\Controllers\Core;

use App\Models\Division;
use App\Models\Committee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterviewController extends Controller
{
    /**
     * Show interview view
     * 
     * @return View
     */
    public function showInterview(Request $request): View
    {
        $divisions = Division::all();
        $searchQuery = $request->query('query');
    
        $committees = Committee::query()
            ->when($searchQuery, function ($query) use ($searchQuery) {
                $query->where('nim', 'like', "%{$searchQuery}%")
                      ->orWhere('full_name', 'like', "%{$searchQuery}%");
            })
            ->get();
    
        $data = [
            'title'      => 'Interview',
            'id_page'    => 'core-interview',
            'divisions'  => $divisions,
            'committees' => $committees,
            'query'      => $searchQuery,
        ];
    
        return view('core.interview', $data);
    }
    
}
