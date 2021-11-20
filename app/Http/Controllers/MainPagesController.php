<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Main;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MainPagesController extends Controller
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

    public function dashboard(){
        return view('pages.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $main = Main::first();
        return view('pages.main', compact('main'));
    }

//    public function edit($id)
//    {
//        $editMain = Main::find($id);
//
//        return view('pages.editmain', compact('editMain'));
//    }


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
            'typography' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $main = Main::first();
//        $main->background_img = $request->background_img;
        if(is_null($main->typography)) return redirect()->route('admin.main')->with('Failed', 'No typography was found');
        if(is_null($main->sub_title)) return redirect()->route('admin.main')->with('Failed', 'No sub_title was found');
        $main->typography = $request->typography;
        $main->sub_title = $request->sub_title;




        if($request->file('background_img')){
            $img_file = $request->file('background_img');
            $bgImg = $this->fileManagementService->uploadFile($request->background_img, $this->fileManagementService->backgroundImagePath());

//            $img_file->storeAs('public/img/','background_img.' . $img_file->getClientOriginalExtension());
//            $main->background_img = "storage/img/background_img." . $img_file->getClientOriginalExtension();

        }

//        if($request->file('resume')){
//            $pdf_file = $request->file('resume');
//            $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
//            $main->resume = "storage/pdf/resume." . $pdf_file->getClientOriginalExtension();
//
//        }

//        $main->background_img = $bgImg['data'];


        $main->save();



        return redirect()->route('admin.main')->with('success', "Main Page data has been updated successfully");
    }

}
