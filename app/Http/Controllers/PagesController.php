<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Elavon Residences';
        // return view('index', compact('title'));
        return view('index') -> with('title', $title);
    }

    public function about(){
        return view('about');
    }

    public function services(){
        $data = array (
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('services') ->with($data);
    }

}
