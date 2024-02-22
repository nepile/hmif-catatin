<?php

namespace App\Http\Controllers\Core;

use Exception;
use App\Models\Division;
use App\Models\Question;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class QuestionsController extends Controller
{
    /**
     * method show view question
     * 
     * @return View
     */
    public function showQuestion(Request $request): View
    {
        $divisions = Division::all();
      
      
        $data = [
            'title'     => 'Questions',
            'id_page'   => 'core-questions',
            'divisions' => $divisions,
            // 'division_id' => $request->route('id')
          
        ];
        return view('core.questions', $data);
    }

    /**
     * method detail question per division
     * 
     * @param $id
     * @return View
     */
    public function detailQuestion($id): View
    {
        $data = [
            'title'     => 'Question' . ' Question',
            'id_page'   => 'core-questions',
            'division'  => Division::where('id', $id)->value('name'),
            'questions' => Question::where('id', $id)->get(),
            'id'        => $id, // Pass the $id variable to the view
        ];

        return view('core.detail-question', $data);
    }

    public function questionValidation($reqs)
    {
        $reqs->validate([
            'question'      => 'required',
            'division_id'   => 'required',
            'max_point'     => 'required'
        ]);
    }

    /**
     * method cerate question
     * 
     * @param Request
     * @return RedirectResponse
     */
    // public function createQuestion(Request $request): RedirectResponse
    // {
    //     $this->questionValidation($request);

    //     try {
    //         Question::create($request->all());
    //         return back()->with('success', 'Berhasil membuat pertanyaan');
    //     } catch (Exception $e) {
    //         Log::error($e->getMessage());
    //         return back()->with('error', 'Gagal membuat pertanyaan');
    //     }
    // }

    

    /**
     * method update question
     * 
     * @param Request
     * @param $id
     * @return RedirectResponse
     */
    public function updateQuestion(Request $request, $id): RedirectResponse
    {
        $this->questionValidation($request);
        try {
            Question::where('id', $id)->update($request->all());
            return back()->with('info', 'Berhasil memperbarui pertanyaan');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('failure', 'Gagal memperbarui pertanyaan');
        }
    }

    /**
     * method delete question
     * 
     * @param $id
     * @return RedirectResponse
     */
    public function deleteQuestion($id)
    {
        try {
            Question::where('id', $id)->delete();
            return back()->with('warning', 'Pertanyaan telah dihapus');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('failure', 'Gagal mengahpus pertanyaan');
        }
    }

    public function showCreateQuestion($id)
{
    $data = [
        'title'     => 'Questions',
        'id_page'   => 'core-questions',
        'id'        => $id, 
    ];
    return view('core.create-question', $data); 
}

public function createQuestion(Request $request): RedirectResponse
{
    $request->validate([
        'question.*' => 'required',
        'max_point.*' => 'required|numeric',
        'division_id' => 'required',
    ]);

    $questions = $request->input('question');
    $maxPoints = $request->input('max_point');
    $divisionId = $request->input('division_id');

    $data = [];
    foreach ($questions as $key => $question) {
        $data[] = [
            'question' => $question,
            'division_id' => $divisionId,
            'max_point' => $maxPoints[$key],
        ];
    }

    try {
        Question::insert($data);
        return back()->with('success', 'Berhasil membuat pertanyaan');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return back()->with('error', 'Gagal membuat pertanyaan');
    }
}
    


  

}
