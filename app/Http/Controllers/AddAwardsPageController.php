<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\AddAward;
use Illuminate\Http\Request;

class AddAwardsPageController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $listAwards = AddAward::all();
        $listAwards->award = $request->award;
        $listAwards->awardTitle = $request->awardTitle;
        $listAwards->awardDescription = $request->awardDescription;
        return view('pages.listAward', compact('listAwards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $addAward = AddAward::last();
        return view('pages.addAward', compact('addAward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'award' => 'required|file',
            'awardTitle' => 'required|string',
            'awardDescription' => 'required|string',
        ]);


        $addAward = new AddAward;
        $addAward->award = $request->award;
        $addAward->awardTitle = $request->awardTitle;
        $addAward->awardDescription = $request->awardDescription;



        if ($request->file('award')) {

            $img1 = $request->file('award');
            $awardImage = $this->fileManagementService->uploadFile($request->award, $this->fileManagementService->awardImagePath());

//            $img1->storeAs('public/img/', $request->file('award')->getClientOriginalName());
//            $addAward->award = "storage/img/" . $request->file('award')->getClientOriginalName();
//            . $img1->getClientOriginalExtension());

        }



        $addAward->award = $awardImage['data'];


        $addAward->save();

        return redirect()->route('admin.award.list')->with('Success', 'New Award has been added successfully.');

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listAwards = AddAward::find($id);
        return view('pages.editaward', compact('listAwards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'award' => 'required|file',
            'awardTitle' => 'required|string',
            'awardDescription' => 'required|string',
        ]);


        $addAward = AddAward::find($id);
        $addAward->award = $request->award;
        $addAward->awardTitle = $request->awardTitle;
        $addAward->awardDescription = $request->awardDescription;


        if ($request->file('award')) {

            $img1 = $request->file('award');
            $awardImage = $this->fileManagementService->uploadFile($request->award, $this->fileManagementService->awardImagePath());
//            dd($awardImage);

//            $img1->storeAs('public/img/', $request->file('award')->getClientOriginalName());
//            $addAward->award = "storage/img/" . $request->file('award')->getClientOriginalName();
//            . $img1->getClientOriginalExtension());

        }




        $addAward->award = $awardImage['data'];


        $addAward->save();

        return redirect()->route('admin.award.list')->with('Success', 'Award has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $listAwards = AddAward::find($id);

        if(!isset($listAwards)) return redirect()->route('admin.award.list')->with('Failed', 'No Award was found');
        if(is_null($listAwards->award)) return redirect()->route('admin.award.list')->with('Failed', 'No Award was found');

        $replacementPart = 'storage/' . $this->fileManagementService->awardImagePath();

        $awardFile = !isset($listAwards) ? null : str_replace($replacementPart, '' , $listAwards->award);
        $awardDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->awardImagePath(), $awardFile);

        if(!$awardDeleteFileResponse) return redirect()->route('admin.award.list')->with('Failed', 'No Award was found');



        $listAwards->delete();

        return redirect()->route('admin.award.list')->with('Success', 'Award has been deleted successfully.');
    }
}
