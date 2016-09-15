<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => 'Guest book on Laravel',
            'pagetitle' => 'Guest book',
            'messages' => Message::latest()->paginate(3),
            'count' => Message::count()
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

    /**
     * @param Message $postModel
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function deleteMessage(Message $postModel, $id)
    {
        $data = [
            'title' => 'Delete: Guest book on Laravel',
            'pagetitle' => 'Delete: Guest book'
        ];

        $postModel->messageDelete($id);

        return view('pages.messages.delete', $data);
    }
}
