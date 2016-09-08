<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Guest book on Laravel',
            'pagetitle' => 'Guest book'
        ];

        return view('pages.messages.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit: Guest book on Laravel',
            'pagetitle' => 'Edit: Guest book'
        ];

        return view('pages.messages.edit', $data);
    }
}
