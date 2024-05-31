<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Models\Category;
use App\Models\Duyuru;
use Illuminate\Support\Facades\Storage;

class DuyuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Duyuru::all();
        return view('admin.duyuru.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data= Category::all();
        return view('admin.duyuru.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBooksRequest $request){
        $data=new Duyuru();
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/duyuru/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Duyuru $books, $id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        //echo "Show page : $id";
        $data= Duyuru::find($id);
        return view('admin.duyuru.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Duyuru $books, $id)
    {
        $data= Duyuru::find($id);
        $datalist= Category::all();
        return view('admin.duyuru.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBooksRequest $request, Duyuru$books, $id)
    {
        $data=Duyuru::find($id);
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/duyuru/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Duyuru $books, $id)
    {
        $data= Duyuru::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/duyuru/');
    }
}
