<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generalsetting;
use App\Models\Sectionhideshow;
use App\Models\Generalcontent;


class GeneralsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalsettings = Generalsetting::find(1);
        $hideshow = Sectionhideshow::all();
        $contentwhyus = Generalcontent::where('show', '=',1)->where('contenttype','=','whyus')->get();
        $contentaboutus = Generalcontent::where('show', '=',1)->where('contenttype','=','aboutus')->get();
        $contentservices = Generalcontent::where('show', '=',1)->where('contenttype','=','services')->get();
        $contentfaq = Generalcontent::where('show', '=',1)->where('contenttype','=','faq')->get();
        //$model = User::where('votes', '>', 100)->firstOrFail();
      //  dd($generalcontent);
        return view('frontend.layouts.app',compact('generalsettings',
                                                    'hideshow',
                                                    'contentwhyus',
                                                    'contentaboutus',
                                                    'contentservices',
                                                    'contentfaq') );
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
