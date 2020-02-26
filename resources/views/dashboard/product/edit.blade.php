@extends('dashboard.app')

@section('title')
EDIT PRODUCT
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
                   <span class="breadcrumb-item active">EDIT PRODUCT</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">EDIT PRODUCT</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <form action="{{ route('update_product') }}" method="post" enctype="multipart/form-data">
@csrf
                            <!--add product name-->
                            <input type="hidden" name="product_id" value="{{ $single_product->id }}">

                            <label for="product_title">Product Title</label>
                            <textarea name="product_title" id="product_title" class="editable tx-16 bd pd-30 tx-inverse" cols="30" rows="10">{{ $single_product->product_title }}</textarea>

                            <!-- product_details    -->

            			    <textarea name="product_details" id="summernote" cols="30" rows="10">{{ $single_product->product_details }}</textarea>

                            <!-- product_photo   -->


                            <div class="row no-gutters">



                            <img src="{{ asset('uploads/products') }}/{{ $single_product->product_photo }}" alt="" class="img-fluid" width="300px">


            						</div>

                            <div class="row no-gutters">


            								<label class="custom-file">
                              <input type="file" value="{{ $single_product->product_photo }}" id="file" name="product_photo" class="custom-file-input">
                                              <span class="custom-file-control"></span>
                                            </label>


            						</div>





                            <button type="submit" class="btn btn-primary" >Update Product</button>




            				</form>

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
