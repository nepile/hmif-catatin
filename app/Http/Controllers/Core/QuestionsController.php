<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Question;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class QuestionsController extends Controller
{
    /**
     * method show view question
     * 
     * @return View
     */
    public function showQuestion(): View
    {
        $divisions = Division::all();
        $data = [
            'title'     => 'Questions',
            'id_page'   => 'core-questions',
            'divisions' => $divisions
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
    public function createQuestion(Request $request): RedirectResponse
    {
        $this->questionValidation($request);

        try {
            Question::create($request->all());
            return back()->with('success', 'Berhasil membuat pertanyaan');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Gagal membuat pertanyaan');
        }
    }

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
}
