<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Claim;
use Carbon\Carbon;
use Alert;
use Image;

class ClaimController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // claim_index

    function claim_index()
    {
      return view('dashboard.claims.index');
    }

    // claim_create

    function claim_create(Request $request)
    {

      $request->validate([
        'icon'          =>'required',
        'claim'          =>'required',
        'claimDate'          =>'required',
        'claimPdf'          =>'required|mimes:pdf,docx|max:20000'
      ]);


      $lastId = Claim::insertGetId([
        'icon'      =>$request->icon,
        'claim'     =>$request->claim,
        'claimDate'     =>$request->claimDate,
        'claimPdf'     =>"default.pdf",
        'created_at'=>Carbon::now(),
      ]);

      if ($request->file('claimPdf')) {
      $photo = $request->claimPdf;
      $photoName = $lastId . '.' . $photo->extension();
      $photo->move(base_path("public/frontend/claim_file/"),$photoName);
      Claim::findOrFail($lastId)->update([
          'claimPdf' => $photoName,
      ]);
      // echo $photoName;
      }

      Alert::toast('CLAIM ADDED','success');
      return back();
    }

    function showclaimpdf($id , $pdf){
      return response()->file(base_path("public/frontend/claim_file/".$pdf));
    }

    // all_claims

    function all_claims()
    {
      $claims = Claim::all();
      return view('dashboard.claims.all_claims',compact('claims'));
    }

    // claim_trash

    function claim_trash($claim_id)
    {
      $claims = Claim::findOrFail($claim_id)->delete();

      Alert::toast('CLAIM TRASHED','success');
      return back();
    }



    // END
}
