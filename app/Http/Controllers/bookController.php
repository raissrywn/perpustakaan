<?php

namespace App\Http\Controllers;

use App\Http\Traits\store;
use Illuminate\Http\Request;
use App\book;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book/index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use store;

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book/edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'category_id' => 'required',
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'page_count' => 'required',
            'language' => 'required',
            'description' => 'required',
            'path_cover' => 'required'
        ]);

        $file = $request->file('path_cover');

        // // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'image';

        // // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Book::where('id', $book->id)
            ->update([
                'category_id' => $request->category_id,
                'isbn' => $request->isbn,
                'title' => $request->title,
                'author' => $request->author,
                'page_count' => $request->page_count,
                'language' => $request->language,
                'description' => $request->description,
                'path_cover' => $file->getClientOriginalName()
            ]);
        return redirect('/book')->with('status', 'Data ' . $request->title . ' berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/book')->with('statusHapus', 'Data Berhasil Dihapus!');
    }
}
