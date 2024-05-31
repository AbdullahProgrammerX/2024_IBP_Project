<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginCheckRequest;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\Books;
use App\Models\Category;
use App\Models\Duyuru;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Contracts\Auth\StatefulGuard $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        return view('login/login');
    }

    public function logincheck(LoginCheckRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            if ($user->role === 'admin') {
                $request->session()->regenerate();
                $books = Books::count();
                $users = User::count();
                $categories = Category::count();
                return view('admin.index', [
                    'books' => $books,
                    'users' => $users,
                    'categories' => $categories,
                ]);
            } else {
                $messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data = Duyuru::all();
                return view('user.index', [
                    'data' => $data,
                    'messages' => $messages,
                ]);
            }

        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('login/register');
    }

    public function registerStore(RegisterStoreRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return view('login/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    public function logouts(Request $request)
    {
        $this->guard->logout();

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect('/login');
    }
}
