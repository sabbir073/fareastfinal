<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ValueStatement;
use App\Year;
use Alert;

class DirectorReportController extends Controller
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
      $all_reports = ValueStatement::latest()->paginate(5);
      $years = Year::all();
      return view('dashboard.value_statement.index',compact('all_reports','years'));
    }

    function create(Request $request)
    {

      $reports = new ValueStatement();
      $reports->title = $request->title;
      $reports->year_id = $request->year1;
      $reports->save();


      Alert::toast('ADDED','success');
      return back();
      // return $path;
    }

    function trash($id)
    {
      ValueStatement::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function edit($id)
    {
      $each_reports = ValueStatement::findOrFail($id);
      $years = Year::all();
      return view('dashboard.value_statement.edit',compact('each_reports','years'));
    }

    function update(Request $request, $id)
    {

      $reports = ValueStatement::where('id', $id)->first();
      $reports->title = $request->title;
      $reports->year_id = $request->year1;

      $reports->save();

     Alert::toast('TRASHED','success');
     return back();
    }

}
