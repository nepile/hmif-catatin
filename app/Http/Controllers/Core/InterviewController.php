<?php

namespace App\Http\Controllers\Core;

use App\Models\Division;
use App\Models\Committee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Utils\SearchData;
use App\Models\Point;
use App\Models\Question;
use Illuminate\Support\Facades\Log;

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
        $searchQuery = $request->input('query');

        $requirements = [
            'model'     => new Committee,
            'field'     => is_numeric($request->input('query')) ? 'nim' : 'full_name',
            'key'       => $request->input('query'),
        ];


        $data = [
            'title'      => 'Interview',
            'id_page'    => 'core-interview',
            'divisions'  => $divisions,
            'committees' => SearchData::find($requirements),
            'query'      => $searchQuery,
        ];

        return view('core.interview', $data);
    }
    public function showInterviewNow($id)
    {

        $divisionId = auth()->user()->division_id;

        $questions = Question::where('division_id', $divisionId)->get();
        $committee = Committee::where('id', $id)->first();

        $data = [
            'title'      => 'Interview',
            'id_page'    => 'core-interview',
            'division_id' => $divisionId,
            'questions'  => $questions,
            'committee'  => $committee
        ];
        return view('core.interview-now', $data);
    }
    public function saveInterview(Request $request, $id)
    {
        $questions = $request->input('question_id');
        $points = $request->input('point');

        $data = [];
        foreach ($questions as $key => $question) {
            $data[] = [
                'committee_id' => $id,
                'question_id' => $question,
                'division_id' => auth()->user()->division_id,
                'point' => $points[$key],
            ];
        }

        try {
            Point::insert($data);
            return redirect()->route('leaderboard')->with('success', 'Berhasil menyimpan interview');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Gagal membuat pertanyaan');
        }
    }
}
