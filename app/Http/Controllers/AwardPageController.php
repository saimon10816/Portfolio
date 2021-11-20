<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardPageController extends Controller
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
        $award = Award::first();
        return view('pages.award', compact('award'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $award = Award::first();

        if($request->file('award1')){
            $img1 = $request->file('award1');
            $img1->storeAs('public/img/','award1.' . $img1->getClientOriginalExtension());
            $award->award1 = "storage/img/award1." . $img1->getClientOriginalExtension();

        }

        if($request->file('award2')){
            $img2 = $request->file('award2');
            $img2->storeAs('public/img/','award2.' . $img2->getClientOriginalExtension());
            $award->award2 = "storage/img/award2." . $img2->getClientOriginalExtension();

        }

        if($request->file('award3')){
            $img3 = $request->file('award3');
            $img3->storeAs('public/img/','award3.' . $img3->getClientOriginalExtension());
            $award->award3 = "storage/img/award3." . $img3->getClientOriginalExtension();

        }

        if($request->file('award4')){
            $img4 = $request->file('award4');
            $img4->storeAs('public/img/','award4.' . $img4->getClientOriginalExtension());
            $award->award4 = "storage/img/award4." . $img4->getClientOriginalExtension();

        }

        if($request->file('award5')){
            $img5 = $request->file('award5');
            $img5->storeAs('public/img/','award5.' . $img5->getClientOriginalExtension());
            $award->award5 = "storage/img/award5." . $img5->getClientOriginalExtension();

        }

        if($request->file('award6')){
            $img6 = $request->file('award6');
            $img6->storeAs('public/img/','award6.' . $img6->getClientOriginalExtension());
            $award->award6 = "storage/img/award6." . $img6->getClientOriginalExtension();

        }


        $award->save();



        return redirect()->route('admin.award')->with('success', "Award Page data has been updated successfully");
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
