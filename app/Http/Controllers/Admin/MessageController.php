<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Models\Books;
use App\Models\Category;
use App\Models\Duyuru;
use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Message::orderBy('created_at', 'desc')->get();
        return view('admin.message.index',[
            'data'=>$data
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Duyuru $books, $id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        //echo "Show page : $id";
        $data=Message::find($id);
        return view('admin.message.show',[
            'data'=>$data
        ]);
    }


    public function update(UpdateBooksRequest $request, Duyuru$books, $id)
    {
        $data=Message::find($id);
        $data->receivedMessage=$request->receivedMessage;
        $data->receiver_id=Auth::user()->id;
        $data->save();

        $messages = Message::all();

        return view('admin.message.index',['data'=>$messages]);
    }


}
