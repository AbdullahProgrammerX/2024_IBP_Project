<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\StoremessageStoreRequest;
use App\Models\Books;
use App\Models\Category;
use App\Models\Duyuru;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Mechanisms\HandleComponents\Synthesizers\ArraySynth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            if( Auth::user()->role === 'admin'){
                $books= Books::count();
                $users= User::count();
                $categories= Category::count();
                return view('admin.index',[
                    'books'=>$books,
                    'users'=>$users,
                    'categories'=>$categories,
                ]);
            }else{
                $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data= Duyuru::orderBy('id', 'desc')->get();
                return view('user.index',[
                    'data'=>$data,
                    'messages'=>$messages
                ]);
            }
        }
        return redirect('/login/');
    }

    public function messages()
    {
        $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
        $data= Message::all();
        return view('user.message.index',[
            'data'=>$data,
            'messages'=>$messages
        ]);
    }
    public function messagesCreate()
    {
        return view('user.message.create');
    }
    public function messagesStore(StoremessageStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data=new Message();
        $data->sender_id = Auth::user()->id;
        $data->sendedMessage=$request->sendedMessage;
        $data->save();
        //return view('user.message.alert');
        return back()->with('success', 'Mesaj gönderildi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function books()
    {
        $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
        $data = Books::all();
        return view('user.books',[
            'data'=>$data,
            'messages'=>$messages
        ]);
    }
    public function showBooks($id)
    {
        $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
        $data = Books::find($id);
        return view('user.showBooks',[
            'data'=>$data,
            'messages'=>$messages,
        ]);
    }

    public function searchBooks(Request $request)
    {
        $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
        $query = $request->input('query');

        // Kitaplarda anahtar kelimeye göre arama yap
        $books = Books::where('name', 'like', "%{$query}%")
            ->orWhere('keywords', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('user.books',[
            'data'=>$books,
            'messages'=>$messages,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function profile()
    {
        $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();

       return view('user.profile',[
           'messages'=>$messages
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
