<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    protected function validator(array $data){
        return Validator::make($data, [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'about_book' => 'required|string|max:255',
            'is_borrowed' => 'string|max:255',
            'cover' => 'sometimes|image|mimes:jpg,jpeg,bmp,svg,png|max:5000',
        ]);
    }


    public function create(array $data)
    {
        if (request()->has('cover')) {
            $avataruploaded = request()->file('cover');//request()->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('storage/bookcover');
            $avataruploaded->move($avatarpath, $avatarname);

            return Book::create([
                'title' => $data['title'],
                'author' => $data['author'],
                'publisher' => $data['publisher'],
                'genre' => $data['genre'],
                'about_book' => $data['about_book'],
                //'is_borrowed' => 0,
                'cover' => 'storage/bookcover/' . $avatarname,

            ]);
        }
        return Book::create([
            'title' => $data['title'],
            'author' => $data['author'],
            'publisher' => $data['publisher'],
            'genre' => $data['genre'],
            'about_book' => $data['about_book'],
            //'is_borrowed' => 0,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
