<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Duyuru;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Laravel\Fortify\Contracts\LogoutResponse;

class AdminController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            if( Auth::user()->role === 'admin'){
                $messages = Message::all();
                $books= Books::count();
                $users= User::count();
                $categories= Category::count();
                return redirect('/admin')
                    ->with('books', $books)
                    ->with('users', $users)
                    ->with('categories', $categories)
                    ->with('messages', $messages);

            }else{
                $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data= Duyuru::all();
                return view('user.index',[
                    'data'=>$data,
                    'messages'=>$messages
                ]);
            }
        }
       return redirect('/login');
    }

    public function usercheck(Request $request):  Application|Factory|View|RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role === 'admin'){
                $messages = Message::all();
                $books= Books::count();
                $users= User::count();
                $categories= Category::count();
                return redirect('/admin/')
                    ->with('books', $books)
                    ->with('users', $users)
                    ->with('duyurular', $categories)
                    ->with('messages', $messages);
            }else{
                $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data= Duyuru::all();
                return redirect('/user/')
                    ->with('data', $data)
                    ->with('messages', $messages);
            }
        }
        return back()->withErrors([
            'error' => 'Sağlanan kimlik bilgileri kayıtlarımızla eşleşmiyor.',
        ])->onlyInput('email');
    }


    public function profile(): Application|Factory|View|RedirectResponse
    {
        return view('admin.profile');
    }



}
