<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\AddBooks;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\While_;

class AddBooksPageController extends Controller
{
    private $fileManagementService;

    public function __construct(FileManagementService $fileManagementService)
    {
        $this->fileManagementService = $fileManagementService;
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return AddBooks[]|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $lists = AddBooks::all();
        $lists->book = $request->book;
        $lists->bookInfo = $request->bookInfo;
        return view('pages.list', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $addBook = AddBooks::last();
        return view('pages.addBook', compact('addBook'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'book' => 'required|file',
            'bookInfo' => 'required|file',
            'bookAuthor' => 'required|string',
            'bookPublisher' => 'required|string',
            'isbn' => 'required',
            'orderAt' => 'required',
            'bookPublishingDate' => 'required',
            'bookShopUrl' => 'required',
            'bookDetails' => 'required'
        ]);


        $addBook = new AddBooks;
        $addBook->book = $request->book;
        $addBook->bookInfo = $request->bookInfo;
        $addBook->bookAuthor = $request->bookAuthor;
        $addBook->bookPublisher = $request->bookPublisher;
        $addBook->isbn = $request->isbn;
        $addBook->orderAt = $request->orderAt;
        $addBook->bookPublishingDate = $request->bookPublishingDate;
        $addBook->bookShopUrl = $request->bookShopUrl;
        $addBook->bookDetails = $request->bookDetails;


        if ($request->file('book')) {

            $img1 = $request->file('book');
            $bookImage = $this->fileManagementService->uploadFile($request->book, $this->fileManagementService->bookImagePath());

//                $img1->storeAs('public/img/', $request->file('book')->getClientOriginalName());
//                $addBook->book = "storage/img/" . $request->file('book')->getClientOriginalName();
//            . $img1->getClientOriginalExtension());

        }

        if ($request->file('bookInfo')) {

            $img2 = $request->file('bookInfo');
            $bookInfo = $this->fileManagementService->uploadFile($request->bookInfo, $this->fileManagementService->bookImagePath());


//            $img2->storeAs('public/img/', $request->file('bookInfo')->getClientOriginalName());
//            $addBook->bookInfo = "storage/img/" . $request->file('bookInfo')->getClientOriginalName();
//            . $img2->getClientOriginalExtension());

        }


        $addBook->book = $bookImage['data'];
        $addBook->bookInfo = $bookInfo['data'];


        $addBook->save();

        return redirect()->route('admin.book.list')->with('Success', 'New Book has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = AddBooks::find($id);
        return view('pages.portfolio-details', compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {

        $lists = AddBooks::find($id);
        return view('pages.editbook', compact('lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'book' => 'required|file',
            'bookInfo' => 'required|file',
            'bookAuthor' => 'required|string',
            'bookPublisher' => 'required|string',
            'isbn' => 'required',
            'orderAt' => 'required',
            'bookPublishingDate' => 'required',
            'bookShopUrl' => 'required',
            'bookDetails' => 'required'
        ]);


        $addBook = AddBooks::find($id);
        $addBook->book = $request->book;
        $addBook->bookInfo = $request->bookInfo;
        $addBook->bookAuthor = $request->bookAuthor;
        $addBook->bookPublisher = $request->bookPublisher;
        $addBook->isbn = $request->isbn;
        $addBook->orderAt = $request->orderAt;
        $addBook->bookPublishingDate = $request->bookPublishingDate;
        $addBook->bookShopUrl = $request->bookShopUrl;
        $addBook->bookDetails = $request->bookDetails;


        if ($request->file('book')) {

            $img1 = $request->file('book');
            $bookImage = $this->fileManagementService->uploadFile($request->book, $this->fileManagementService->bookImagePath());


//            $img1->storeAs('public/img/', $request->file('book')->getClientOriginalName());
//            $addBook->book = "storage/img/" . $request->file('book')->getClientOriginalName();
//            . $img1->getClientOriginalExtension());

        }

        if ($request->file('bookInfo')) {

            $img2 = $request->file('bookInfo');
            $bookInfo = $this->fileManagementService->uploadFile($request->bookInfo, $this->fileManagementService->bookImagePath());


//            $img2->storeAs('public/img/', $request->file('bookInfo')->getClientOriginalName());
//            $addBook->bookInfo = "storage/img/" . $request->file('bookInfo')->getClientOriginalName();
//            . $img2->getClientOriginalExtension());

        }

        $addBook->book = $bookImage['data'];
        $addBook->bookInfo = $bookInfo['data'];

        $addBook->save();

        return redirect()->route('admin.book.list')->with('Success', 'Book has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function delete($id)
    {
        $lists = AddBooks::find($id);

        if(!isset($lists)) return redirect()->route('admin.book.list')->with('Failed', 'No Book was found');
        if(is_null($lists->book)) return redirect()->route('admin.book.list')->with('Failed', 'No Book was found');
        if(is_null($lists->bookInfo)) return redirect()->route('admin.book.list')->with('Failed', 'No Book Info was found');


        $replacementPart = 'storage/' . $this->fileManagementService->bookImagePath();

        $bookFile = !isset($lists) ? null : str_replace($replacementPart, '' , $lists->book);

        $bookDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->bookImagePath(), $bookFile);

//        if(!$bookDeleteFileResponse) return redirect()->route('admin.book.list')->with('Failed', 'No Book was found');


        $bookInfoFile = !isset($lists) ? null : str_replace($replacementPart, '' , $lists->bookInfo);
        $bookInfoDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->bookImagePath(), $bookInfoFile);

//        if(!$bookInfoDeleteFileResponse) return redirect()->route('admin.book.list')->with('Failed', 'No Book was found');


        $lists->delete();


        return redirect()->route('admin.book.list')->with('Success', 'Book has been deleted successfully.');

    }
}
