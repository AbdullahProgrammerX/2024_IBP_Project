<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        $data= Books::all();
        return view('admin.books.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data= Category::all();
        return view('admin.books.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBooksRequest $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View
    {
        $data=new Books();
        $data->category_id=$request->parent_id;
        $data->name=$request->name;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->author=$request->author;
        //$data->published_date=$request->published_date;
        $data->pages=$request->pages;
        $data->publisher=$request->publisher;
        $data->price=$request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        $data= Books::all();
        return view('admin.books.index',[
            'data'=>$data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books, $id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        //echo "Show page : $id";
        $data= Books::find($id);
        return view('admin.books.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books, $id)
    {
        $data= Books::find($id);
        $datalist= Category::all();
        return view('admin.books.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    public function searchBooks(Request $request)
    {
        $query = $request->input('query');

        // Kitaplarda anahtar kelimeye göre arama yap
        $data = Books::where('name', 'like', "%{$query}%")
            ->orWhere('keywords', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('admin.books.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBooksRequest $request, Books $books, $id)
    {
        $data=Books::find($id);
        $data->category_id=$request->parent_id;
        $data->name=$request->name;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->author=$request->author;
        //$data->published_date=$request->published_date;
        $data->pages=$request->pages;
        $data->publisher=$request->publisher;
        $data->price=$request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/books/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books, $id)
    {
        $data= Books::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/books/');
    }
}
