<?php

namespace App\Http\Controllers\Core;

use App\Models\Division;
use App\Models\Committee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
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
    public function showInterviewNow($id)
    {
     
        $divisionId = auth()->user()->division_id;
        $questions = Question::where('division_id', $divisionId)->get();
        $committee = Committee::findOrFail($id);
        $data = [
            'title'      => 'Interview',
            'id_page'    => 'core-interview',
            'division_id' => $divisionId,
            'questions'  => $questions,
            'committee'  => $committee
        ];
        return view('core.interview-now', $data);
    }
    

    
}
