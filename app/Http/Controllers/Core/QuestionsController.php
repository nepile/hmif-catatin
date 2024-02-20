<?php

namespace App\Http\Controllers\Core;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        $data=[
            'title'     => 'Questions',
            'id_page'   => 'core-questions'
        ];
        return view('core.questions',$data);
    }
}
