@extends('dashboard.app')

@section('title')
FAREAST STAR
@endsection

@section('css_cdn')


  <link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">

  <link href="{{ asset('dashboard/lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/medium-editor/default.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">


@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">FAREAST STAR</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">FAREAST STAR</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- form-layout -->
                            <div class="form-layout form-layout-7">
                                <form action="{{ route('fareast_star_create') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Add Fareast Star: </div>
                                        <div class="col-7 col-sm-8">
                                            <input class="form-control" type="text" name="name" placeholder="Add Fareast Star Name"> </div>
                                    </div>
                                    <!-- Add New Logo-->
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4"> Fateast Star Thumbnail: </div>
                                        <div class="col-7 col-sm-8">
                                            <label class="custom-file">
                                                <input type="file" id="file" name="thumbnail" class="custom-file-input"> <span class="custom-file-control"></span> </label>
                                        </div>
                                    </div>


                                    <label for="far_star_desc">Fateast Star Description</label>
                                    <textarea name="far_star_desc" id="far_star_desc" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10"></textarea>



                                    <button type="submit" class="btn btn-primary bg-primary "><i class="fa fa-send mg-r-10"></i> Send data </button>
                                </form>
                            </div>
                            <!-- form-layout -->

            {{-- inner_content END --}}

          </div>
        </div>





        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Logo -->
                <div class="container">
                    <div class="row">

                      @foreach ($stars as $star)

                        <div class="col-md-4">
                            <div class="card"> <img class="card-img-top img-fluid" src="{{ asset('uploads/fareaststar') }}/{{ $star->thumbnail }}" alt="{{ $star->name }}">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h6>{{ $star->name }}</h6>
                                      </div> <a href="{{ url('/dashboard/fareast/star/delete') }}/{{ $star->id }}" class="btn btn-oblong btn-danger">Remove</a> </div>
                            </div>
                            <!-- card -->
                        </div>

                      @endforeach

                    </div>
                </div>
                <!-- All Logo End -->

            {{-- inner_content END --}}

          </div>
        </div>






@endsection

@section('js_cdn')


  		<script src="{{ asset('dashboard/lib/highlightjs/highlight.pack.js') }}"></script>
      <script src="{{ asset('dashboard/lib/summernote/summernote-bs4.min.js') }}"></script>
  		<script src="{{ asset('dashboard/lib/medium-editor/medium-editor.js') }}"></script>


  <script>
  			$(function(){
  			  'use strict';



  			  // Inline editor
  			  var editor = new MediumEditor('.editable');

  			  // Summernote editor
  			  $('#summernote').summernote({
  			    height: 300,
                  placeholder:'Product Details',
  			    tooltip: false
  			  })
  			});
  		</script>

@endsection
