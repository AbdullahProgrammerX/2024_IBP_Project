<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Message;
use App\Models\User;
use App\Models\Category;
use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data= User::all();
        $messages = Message::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.users.index', compact('data','messages'));
//        return redirect('/admin/users/')
//            ->with('data', $data)
//            ->with('messages', $messages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data=new User();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->role=$request->role;
        if($request->file('image')){
            $data->profile_photo_path=$request->file('image')->store('images');
        }
        $data->save();

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users, $id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        //echo "Show page : $id";
        $data= User::find($id);
        return view('admin.users.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users, $id)
    {
        $data= User::find($id);
        return view('admin.users.edit',[
            'data'=>$data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $users, $id)
    {
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->role=$request->role;
        if($request->file('image')){
            $data->profile_photo_path=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/users/');

//        echo $request->file('image')->store('images');
//        echo "\n";
//        echo $data->profile_photo_path;
//        echo "\n";
//        echo Storage::url($data->profile_photo_path);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users, $id)
    {
        $data= User::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/users/');
    }
}
