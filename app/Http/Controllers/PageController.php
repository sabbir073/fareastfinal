<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\page;
use Carbon\Carbon;
use Alert;

class PageController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// index
    function index()
    {
      return view('dashboard.pages.index');
    }

// all
    function all()
    {
      $pages = page::all();
      return view('dashboard.pages.all',compact('pages'));
    }


// create
    function create(Request $request)
    {
      page::insert([
        'page_title'=>$request->page_title,
        'page_details'=>$request->page_details,
        'slug'=>Str::slug($request->page_title),
        'created_at'=>Carbon::now(),
      ]);


            Alert::toast('ADDED','success');
            return back();
    }


    // edit
        function edit($page_id)
        {
          $single_page = page::findOrFail($page_id);
          return view('dashboard.pages.edit',compact('single_page'));
        }

    // trash
        function trash($page_id)
        {
          page::findOrFail($page_id)->delete();

          Alert::toast('TRASHED','success');
          return back();
        }

    // update
        function update(Request $request)
        {
          page::findOrFail($request->page_id)->update([
            'page_title'=>$request->page_title,
            'page_details'=>$request->page_details,
            'updated_at'=>Carbon::now(),
          ]);

          Alert::toast('UPDATED','success');
          return back();
        }

    //END
}
