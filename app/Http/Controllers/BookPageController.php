<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Main;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::first();
        return view('pages.book', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {

        $book = Book::first();

        if($request->file('book1')){
            $img1 = $request->file('book1');
            $img1->storeAs('public/img/','book1.' . $img1->getClientOriginalExtension());
            $book->book1 = "storage/img/book1." . $img1->getClientOriginalExtension();

        }

        if($request->file('book2')){
            $img2 = $request->file('book2');
            $img2->storeAs('public/img/','book2.' . $img2->getClientOriginalExtension());
            $book->book2 = "storage/img/book2." . $img2->getClientOriginalExtension();

        }

        if($request->file('book3')){
            $img3 = $request->file('book3');
            $img3->storeAs('public/img/','book3.' . $img3->getClientOriginalExtension());
            $book->book3 = "storage/img/book3." . $img3->getClientOriginalExtension();

        }

        if($request->file('book4')){
            $img4 = $request->file('book4');
            $img4->storeAs('public/img/','book4.' . $img4->getClientOriginalExtension());
            $book->book4 = "storage/img/book4." . $img4->getClientOriginalExtension();

        }

        if($request->file('book5')){
            $img5 = $request->file('book5');
            $img5->storeAs('public/img/','book5.' . $img5->getClientOriginalExtension());
            $book->book5 = "storage/img/book5." . $img5->getClientOriginalExtension();

        }

        if($request->file('book6')){
            $img6 = $request->file('book6');
            $img6->storeAs('public/img/','book6.' . $img6->getClientOriginalExtension());
            $book->book6 = "storage/img/book6." . $img6->getClientOriginalExtension();

        }


        $book->save();



        return redirect()->route('admin.book')->with('success', "Book Page data has been updated successfully");
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
