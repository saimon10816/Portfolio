<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaPageController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function list(Request $request){
        $mediaLists = Media::all();
        $mediaLists->mediaImage = $request->mediaImage;
        $mediaLists->mediaTitle = $request->mediaTitle;
        $mediaLists->mediaBy = $request->mediaBy;
        $mediaLists->created_at = $request->created_at;
        $mediaLists->mediaBody = $request->mediaBody;
        return view('pages.mediaList', compact('mediaLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $addMedia = Media::last();
        return view('pages.addMedia', compact('addMedia'));
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

            'mediaImage' => 'required|file',
             'mediaTitle' => 'required|string',
             'mediaBy' => 'required|string',
             'mediaBody' => 'required|string',

        ]);


        $addMedia = new Media;
        $addMedia->mediaImage = $request->mediaImage;
        $addMedia->mediaTitle = $request->mediaTitle;
        $addMedia->mediaBy = $request->mediaBy;
        $addMedia->mediaBody = $request->mediaBody;

        if ($request->file('mediaImage')) {

            $img1 = $request->file('mediaImage');
            $mediaImage = $this->fileManagementService->uploadFile($request->mediaImage, $this->fileManagementService->mediaImagePath());


        }



        $addMedia->mediaImage = $mediaImage['data'];


        $addMedia->save();

        return redirect()->route('admin.media.list')->with('Success', 'New Media item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $mediaLists = Media::find($id);
        return view('pages.blog-single', compact('mediaLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediaLists = Media::find($id);
        return view('pages.editMedia', compact('mediaLists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'mediaImage' => 'required|file',
            'mediaTitle' => 'required|string',
            'mediaBy' => 'required|string',
            'mediaBody' => 'required|string',

        ]);


        $addMedia = Media::find($id);
        $addMedia->mediaImage = $request->mediaImage;
        $addMedia->mediaTitle = $request->mediaTitle;
        $addMedia->mediaBy = $request->mediaBy;
        $addMedia->mediaBody = $request->mediaBody;


        if ($request->file('mediaImage')) {

            $img1 = $request->file('mediaImage');
            $mediaImage = $this->fileManagementService->uploadFile($request->mediaImage, $this->fileManagementService->mediaImagePath());


        }



        $addMedia->mediaImage = $mediaImage['data'];


        $addMedia->save();

        return redirect()->route('admin.media.list')->with('Success', 'New Media item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $mediaLists = Media::find($id);

        if(!isset($mediaLists)) return redirect()->route('admin.mediaImage.list')->with('Failed', 'No Media Info was found');
        if(is_null($mediaLists->mediaImage)) return redirect()->route('admin.mediaImage.list')->with('Failed', 'No Media Info was found');

        $replacementPart = 'storage/' . $this->fileManagementService->mediaImagePath();

        $mediaImageFile = !isset($mediaLists) ? null : str_replace($replacementPart, '' , $mediaLists->mediaImage);
        $mediaImageDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->mediaImagePath(), $mediaImageFile);

        if(!$mediaImageDeleteFileResponse) return redirect()->route('admin.mediaList')->with('Failed', 'No Media Info was found');



        $mediaLists->delete();

        return redirect()->route('admin.media.list')->with('Success', 'Media Info has been deleted successfully.');
    }
}
