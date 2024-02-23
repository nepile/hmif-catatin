<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Http\Utils\SearchData;
use App\Models\Division;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CoordinatorController extends Controller
{
    protected $model, $coors;
    public function __construct()
    {
        $this->model = [
            'user'  => new User,
            'division'  => new Division,
        ];
        $this->coors = $this->model['user']->where('role_id', 2)->orderBy('id', 'DESC')->paginate(10);
    }
    /**
     * Show coordinator view
     * 
     * @return View
     */
    public function showCoordinator(): View
    {

        $data = [
            'title'     => 'Coordinator',
            'id_page'   => 'core-coordinator',
            'coors'     => $this->coors,
            'divisions' => $this->model['division']->get(),
        ];
        return view('core.coordinator', $data);
    }

    /**
     * handle search data request
     * 
     * @param Request
     * @return $this->showCoordinator
     */
    public function searchCoordinator(Request $req)
    {
        $requirements = [
            'model'     => $this->model['user'],
            'field'     => 'name',
            'key'       => $req->input('query')
        ];

        $this->coors = SearchData::find($requirements);

        return $this->showCoordinator();
    }

    /**
     * handle create data request
     * 
     * @param Request
     * @return RedirectResponse
     */
    public function createCoordinator(Request $req): RedirectResponse
    {
        try {
            $this->model['user']->create([
                'name' => $req->input('name'),
                'nim' => $req->input('nim'),
                'role_id' => 4,
                'division_id' => $req->input('division_id'),
                'gen' => $req->input('gen'),
                'password' => Hash::make($req->input('nim'))
            ]);
            return back()->with('success', 'Berhasil membuat koordinator!');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return back()->with('failure', 'Error: Pastikan NIM yang anda masukkan masih tersedia');
        }
    }

    /**
     * handle update data request
     * 
     * @param Request
     * @return RedirectResponse
     */
    public function updateCoordinator(Request $req, $id): RedirectResponse
    {
        try {
            $this->model['user']->where('id', $id)->update([
                'name' => $req->input('name'),
                'nim' => $req->input('nim'),
                'division_id' => $req->input('division_id'),
                'gen' => $req->input('gen'),
                'password' => Hash::make($req->input('nim'))
            ]);
            return back()->with('info', 'Data koordinator telah diperbarui!');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return back()->with('failure', 'Error: Pastikan NIM yang anda masukkan masih tersedia');
        }
    }

    /**
     * handle delete data request
     * 
     * @param Request
     * @return RedirectResponse
     */
    public function deleteCoordinator($id): RedirectResponse
    {
        try {
            $this->model['user']->where('id', $id)->delete();
            return back()->with('warning', 'Koordinator telah dihapus!');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return back()->with('failure', 'Error: Terjadi kesalahan teknis saat menghapus data');
        }
    }
}
