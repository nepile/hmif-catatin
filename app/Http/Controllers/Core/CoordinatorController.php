<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Http\Utils\SearchData;
use App\Models\Division;
use App\Models\User;
use Illuminate\Http\Request;
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
        $this->coors = $this->model['user']->where('role_id', 4)->get();
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
        ];
        return view('core.coordinator', $data);
    }

    /**
     * handle search data request
     * 
     * @param Request
     * @return $this->showCoordinator
     */
    public function searchCoordinator(Request $request)
    {
        $requirements = [
            'model'     => $this->model['user'],
            'field'     => 'name',
            'key'       => $request->input('query')
        ];

        $this->coors = SearchData::find($requirements);

        return $this->showCoordinator();
    }
}
