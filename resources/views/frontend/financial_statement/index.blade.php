@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }

  main{
    background: #FBFBFB;
  }

@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay" style="z-index: 1;">
          <div class="bg_image_holder" style="background-image: url(&quot;img/breadbg.jpg&quot;); opacity: 1;">
              <img src="https://picfiles.alphacoders.com/191/191008.jpg" alt="img/breadbg.jpg">
          </div>
          <div class="container content_above">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                          <h4 class="page_title text-uppercase" style="margin-top: 35px;">financial statement</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




<div class="container mt-5">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="table-responsive">

@foreach ($statements as $statement)

        <table class="table table-one">
            <thead class="table-success">
                <tr>
                    <th scope="col">Year {{ $statement->year }}</th>
                    <th scope="col"></th>
                </tr>
            </thead><!-- ends: thead -->
            <tbody>

        @foreach ($statement->years as $value)
          <tr>
              <th scope="row">{{$value->title}}</th>
              <td><i class="fa fa-download" style="color: #B22A08; margin-right:5px;"></i><a href="#" download>Download</a></td>
          </tr>
        @endforeach

            </tbody><!-- ends: tbody -->
          </table>

@endforeach




    </div>
    </div>
  </div>
</div>




@endsection

@section('js')

@endsection
