<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

/**
 * 
 */
trait store
{
    public function store(Request $request)
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

        Book::create([
            'category_id' => $request->category_id,
            'isbn' => $request->isbn,
            'title' => $request->title,
            'author' => $request->author,
            'page_count' => $request->page_count,
            'language' => $request->language,
            'description' => $request->description,
            'path_cover' => $file->getClientOriginalName()
        ]);

        Book::create($request->all());
        return redirect('/book')->with('status', 'Data ' . $request->title . ' berhasil ditambahkan!');
    }
}
