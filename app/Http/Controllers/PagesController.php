<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AddAward;
use App\Models\AddBooks;
use App\Models\Award;
use App\Models\Book;
use App\Models\Main;
use App\Models\Media;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $about = About::first();
        $book = Book::first();
        $award = Award::first();
        $addBook = AddBooks::all();
        $lists = AddBooks::all();
        $addAward = AddAward::all();
        $listAwards = AddAward::all();
        $addMedia = Media::all();
        $mediaLists = Media::orderBy('id', 'DESC')->get();
        return view('pages.index', compact('main', 'about', 'book', 'award', 'addBook', 'lists', 'addAward', 'listAwards','addMedia', 'mediaLists'));
    }



//    public function main(){
//        return view('pages.main');
//    }
//
//    public function about(){
//        return view('pages.about');
//    }
//
//    public function book(){
//        return view('pages.book');
//    }
//
//    public function addBooks(){
//        return view('pages.addBook');
//    }
//
//    public function list(){
//        return view('pages.list');
//    }
//
//    public function award(){
//        return view('pages.award');
//    }
//
//    public function addAward(){
//        return view('pages.addAward');
//    }
//
//    public function listAward(){
//        return view('pages.listAward');
//    }
}
