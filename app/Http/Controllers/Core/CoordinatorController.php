<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoordinatorController extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = [
            'user'  => new User,
            'division'  => new Division,
        ];
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
            'coors'     => $this->model['user']->where('role_id', 4)->get()
        ];
        return view('core.coordinator', $data);
    }
}
