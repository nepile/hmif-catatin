<?php

namespace App\Http\Controllers\Core;

use App\Models\Committee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class CommitteeController extends Controller
{
    /**
     * Show committee view
     *
     * @return View
     */
    public function showCommittee(): View
    {
        $divisions = Division::all();
        $committees = Committee::all();

        $data = [
            'title'      => 'Committee',
            'id_page'    => 'core-committee',
            'committees' => $committees,
        ];

        return view('core.committee', $data);
    }

    public function createCommittee(Request $request)
    {
        $request->validate([
            'full_name'        => 'required',
            'nim'              => 'required',
            'gen'              => 'required',
        ]);
        try {

            Committee::create($request->all());

            return redirect()->route('show-committee')->with('success', 'Berhasil membuat commite');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('failure', 'Error: Gagal mendaftarkan commite');
        }
    }

    public function updateCommittee(Request $request, $id)
    {
        $request->validate([
            'division_id'      => 'required',
            'full_name'        => 'required',
            'nim'              => 'required',
            'gen'              => 'required',
        ]);
        try {
            $committee = Committee::findOrFail($id);


            $committee->update($request->all());

            return redirect()->route('show-committee')->with('info', 'Data Commitee telah diperbarui!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('failure', 'gagal update data commitee');
        }
    }

    public function deleteCommittee($id)
    {
        try {
            $committee = Committee::findOrFail($id);
            $committee->delete();

            return redirect()->route('show-committee')->with('warning', 'Berhasil menghapus data commitee');
        } catch (ModelNotFoundException $e) {
            return back()->with('failure', 'Error: Committee not found');
        } catch (\Exception $e) {

            Log::error($e->getMessage());
            return back()->with('failure', 'Error: Terjadi kesalahan teknis saat menghapus data');
        }
    }
}
