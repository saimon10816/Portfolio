<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\About;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AboutPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $fileManagementService;

    public function __construct(FileManagementService $fileManagementService)
    {
        $this->fileManagementService = $fileManagementService;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     *      * @return Application|Factory|View
     */
    public function index()
    {
        $about = About::first();
        return view('pages.about', compact('about'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|string',
            'sub_body' => 'required|string',
//            'display_img' => 'required|file'
        ]);

        $about = About::first();
        $about->body = $request->body;
        $about->sub_body = $request->sub_body;


        if($request->file('display_img')){
            $img_file = $request->file('display_img');
            $displayImg = $this->fileManagementService->uploadFile($request->display_img, $this->fileManagementService->displayImagePath());



//            $img_file->storeAs('public/img/','display_img.' . $img_file->getClientOriginalExtension());
//            $about->display_img = "storage/img/display_img." . $img_file->getClientOriginalExtension();

        }

        $about->display_img = $displayImg['data'];



        $about->save();



        return redirect()->route('admin.about')->with('success', "About Page data has been updated successfully");
    }

}
